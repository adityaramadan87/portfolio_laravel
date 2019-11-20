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

    $file = $request->file('image_project');
    $nama_file = time()."_".$file->getClientOriginalName();
    $tujuan_upload = 'public\image';
    $file->move($tujuan_upload, $nama_file);


    $project = Project::create([
        'title_project' => $request->title_project,
        'category_project' => $request->category_project,
        'image_project' => $nama_file
    ]);

    return $this->sendResponse($project->toArray(), 'Project Created Successfully');
  }

  //show
  public function show(){
      $project = Project::all();

      if (is_null($project)){
          return $this->sendError('Project Not Found');
      }
      return $this->sendResponse($project->toArray(), 'Project Retrieved Successfully');
  }

  //update project;
  public function update(Request $request, $id){
      $input = $request->all();

      $project = Project::find($id);

      $project->title_project = $input['title_project'];
      $project->category_project = $input['category_project'];

      if ($file = $request->hasFile('image_project')){
          $file = $request->file('image_project');
          $nama_file = time()."_".$file->getClientOriginalName();
          $tujuan_upload = 'public\image';
          $file->move($tujuan_upload, $nama_file);
          $project->image_project = $nama_file;
      }

      $project->save();

      return $this->sendResponse($project->toArray(), 'Project Updated Successfully');
  }

  public function destroy($id){
      $project = Project::destroy($id);

      return $this->sendResponse($project, 'Project Deleted Successfully');
  }

}


?>
