<?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 16/12/2015
 * Time: 16:49
 */
?>

@extends('adminLTE')

<!-- Content Header (Page header) -->
   

@section('contenu')
    
    <section class="content-header">
        <h1>
            Acceuil
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Acceuil</li>
        </ol>
        </br>
      
        <td>
          
        </td>
        <td>
          
        </td>
        <td>
          
        </td>
        <td>
          
        </td>

      <div class="row">
        <!-- /.col -->
        <div class="col-md-9">
          <a href="classe">
          <button type="button" class="btn btn-block btn-primary btn-lg" >Liste Des Classes</button>
          </a>
          </br>
          <a href="classe/create">
          <button type="button" class="btn btn-block btn-primary btn-lg" >Création des classes</button>
          </a>
          </br>
          </br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-9">
          <a href="user">
          <button type="button" class="btn btn-block btn-success btn-lg" >Liste Des Utilisateurs</button>
          </a>
          </br>
          <a href="user/create">
          <button type="button" class="btn btn-block btn-success btn-lg" >Création Des Utilisateurs</button>
          </a>
          </br>
          </br>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-9">
          <a href="evenement">
          <button type="button" class="btn btn-block btn-info btn-lg" >Liste Des Evenements</button>
          </a>
          </br>
          <a href="evenement/create">
          <button type="button" class="btn btn-block btn-info btn-lg" >Création Des Evenements</button>
          </a>
        </div>
      </div>
      <!-- /.row -->
    
    </section> 

    
    
           

 
@endsection
