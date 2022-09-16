@extends('front.pesonafm.layouts.app')
@section('content')
@if($music->count() != 0)
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
<meta charset="UTF-8" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind config ={
    darkMode: 'class',
    theme: {
      extend: {
        spacing: {
      13: '3.25rem',
       },
      }
   
    },
  };
  </script>
<title> belajar tailwindCSS</title>
<style type="text/tailwindcss">
  
  </style>
  </head> 
  <tbody>
                                            <?php
                                            $x=1;
                                            foreach ($customer->result_array() as $i) :
                                                $id = $i['music_id'];
                                                $title = $i['title'];
                                                $artis = $i['Artis'];
                                                $album = $i['album'];
                                            ?>

                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $title; ?></td>
                                                <td><?php echo $artis; ?></td>
                                                <td><?php echo $album; ?></td>
                                                <td>
                                                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#editCustomer<?php echo $id; ?>" title="Edit User"><i class="fas fa-edit"></i></a>
                                                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#deleteCustomer<?php echo $id; ?>" title="Delete User"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                                $x++;
                                                endforeach; ?>
                                        </tbody>
