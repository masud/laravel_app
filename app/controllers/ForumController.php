<?php

/**
* 
*/
class ForumController extends BaseController
{
	public function index(){

		$groups = ForumGroup::all();
		$categories = ForumCategory::all();
		
		return View::make('forum.index')->with('groups', $groups)->with('categories', $categories);


	}

	public function category($id){

	}

	public function thread($id){

	}

	public function storeGroup(){

		$validator = Validator::make(Input::all(), array(
			'group_name' => 'required|unique:forum_groups,title'
			
			));
		if($validator->fails()){
			return Redirect::route('forum-home')->withInput()->withErrors($validator)->with('modal', '#group_form');
		}else{
			$group = new ForumGroup;
			$group->title = Input::get('group_name');
			$group->author_id = Auth::user()->id;
			
			if($group->save()){
				return Redirect::route('forum-home')->with('success', 'New Group was Created');
			}else{
				return Redirect::route('forum-home')->with('fail', 'Something was Worng');
			}

		}

	}
	
}