<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Project;
use Validator;

/**
 *
 */
class ProjectController extends BaseController
{
  public function index(){
    $project = Project::all();

    return $this->sendResponse($project->toArray(), 'Projects Retrieved Succesfully');
  }

  //insertDataProject
  public function store(Request $request){
    $input = $request->all();

    $validator = Validator::make($input, [
      'title_project' => 'required',
      'category_project' => 'required',
      'image_project' => 'required'
    ]);

    if ($validator->fails()) {
      return $this->sendError('Validation Error', $validator->errors());
    }

    $project = Project::create($input);

    return $this->sendResponse($project->toArray(), 'Project Created Successfully');
  }

  //show berdasar id
  public function show(){
      $project = Project::all();

      if (is_null($project)){
          return $this->sendError('Project Not Found');
      }
      return $this->sendResponse($project->toArray(), 'Project Retrieved Successfully');
  }

  //update project;
  public function update(Request $request, Project $project){
      $input = $request->all();

      $validator = Validator::make($input, [
         'title_project' => 'required',
         'category_project' => 'required',
         'image_project' => 'required'
      ]);

      if ($validator->fails()){
          return $this->sendError('Validation Error', $validator->errors());
      }

      $project->title_project = $input['title_project'];
      $project->category_project = $input['category_project'];
      $project->image_project = $input['image_project'];
      $project->save();

      return $this->sendResponse($project->toArray(), 'Project Updated Successfully');
  }

  public function destroy(Project $project){
      $project->delete();

      return $this->sendResponse($project->toArray(), 'Project Deleted Successfully');
  }

}


?>
