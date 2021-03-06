<?php
/**
 * LaraClassifier - Classified Ads Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Http\Controllers\Admin;

use Larapen\Admin\app\Http\Controllers\PanelController;
use App\Http\Requests\Admin\PictureRequest as StoreRequest;
use App\Http\Requests\Admin\PictureRequest as UpdateRequest;

class PictureController extends PanelController
{
	public function setup()
	{
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
		$this->xPanel->setModel('App\Models\Picture');
		$this->xPanel->with(['post']);
		$this->xPanel->setRoute(admin_uri('pictures'));
		$this->xPanel->setEntityNameStrings(trans('admin.picture'), trans('admin.pictures'));
		$this->xPanel->removeButton('create');
		if (!request()->input('order')) {
			$this->xPanel->orderBy('created_at', 'DESC');
		}
		
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_delete_btn', 'bulkDeleteBtn', 'end');
		$this->xPanel->addButtonFromModelFunction('line', 'edit_post', 'editPostBtn', 'beginning');
		
		// Filters
		// -----------------------
		$this->xPanel->disableSearchBar();
		// -----------------------
		$this->xPanel->addFilter([
			'name'        => 'country',
			'type'        => 'select2',
			'label'       => mb_ucfirst(trans('admin.country')),
			'placeholder' => trans('admin.select'),
		],
		getCountries(),
		function ($value) {
			$this->xPanel->addClause('whereHas', 'post', function($query) use ($value) {
				$query->where('country_code', '=', $value);
			});
		});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'post_id',
			'type'  => 'text',
			'label' => trans('admin.Listing'),
		],
		false,
		function ($value) {
			if (is_numeric($value)) {
				$this->xPanel->addClause('where', 'post_id', '=', $value);
			} else {
				$this->xPanel->addClause('whereHas', 'post', function ($query) use ($value) {
					$query->where('title', 'LIKE', $value . '%');
				});
			}
		});
		// -----------------------
		$this->xPanel->addFilter([
			'name'  => 'status',
			'type'  => 'dropdown',
			'label' => trans('admin.Status'),
		], [
			1 => trans('admin.Unactivated'),
			2 => trans('admin.Activated'),
		], function ($value) {
			if ($value == 1) {
				$this->xPanel->addClause('where', function ($query) {
					$query->where(function ($query) {
						$query->where('active', '!=', 1)->orWhereNull('active');
					});
				});
			}
			if ($value == 2) {
				$this->xPanel->addClause('where', 'active', '=', 1);
			}
		});
		
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// COLUMNS
		$this->xPanel->addColumn([
			'name'  => 'id',
			'label' => '',
			'type'  => 'checkbox',
			'orderable' => false,
		]);
		$this->xPanel->addColumn([
			'name'          => 'filename',
			'label'         => trans('admin.Filename'),
			'type'          => 'model_function',
			'function_name' => 'getFilenameHtml',
		]);
		$this->xPanel->addColumn([
			'name'          => 'post_id',
			'label'         => trans('admin.Listing'),
			'type'          => 'model_function',
			'function_name' => 'getPostTitleHtml',
		]);
		$this->xPanel->addColumn([
			'name'          => 'country_code',
			'label'         => mb_ucfirst(trans('admin.country')),
			'type'          => 'model_function',
			'function_name' => 'getCountryHtml',
		]);
		$this->xPanel->addColumn([
			'name'          => 'active',
			'label'         => trans('admin.Active'),
			'type'          => 'model_function',
			'function_name' => 'getActiveHtml',
		]);
		
		// FIELDS
		$this->xPanel->addField([
			'name'  => 'post_id',
			'type'  => 'hidden',
			'value' => request()->get('post_id'),
		], 'create');
		$this->xPanel->addField([
			'name'   => 'filename',
			'label'  => trans('admin.Picture'),
			'type'   => 'image',
			'upload' => true,
			'disk'   => 'public',
		]);
		$this->xPanel->addField([
			'name'  => 'active',
			'label' => trans('admin.Active'),
			'type'  => 'checkbox_switch',
			'value' => 1,
		]);
	}
	
	public function store(StoreRequest $request)
	{
		$file = $request->hasFile('filename') ? $request->file('filename') : $request->input('filename');
		$request->request->add(['mime_type' => getUploadedFileMimeType($file)]);
		
		return parent::storeCrud($request);
	}
	
	public function update(UpdateRequest $request)
	{
		$file = $request->hasFile('filename') ? $request->file('filename') : $request->input('filename');
		$request->request->add(['mime_type' => getUploadedFileMimeType($file)]);
		
		return parent::updateCrud($request);
	}
}
