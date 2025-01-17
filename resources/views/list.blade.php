@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="style.css" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <style>
            .logo img {
                width: 60px; /* Adjust the width as needed */
                height: auto; /* Maintain aspect ratio */
                margin-right: 10px;
            }

            .logo {
                width: 89px;
                height: 61px;
                display: flex;
                flex-wrap: nowrap;
                padding: 1px;
            }

            .header-container {
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                padding: 29px;
                background-color: white;
                color: #000000;
                border-radius: 8px 8px 0 0;
                border-bottom: 1px solid #bfbfbf;
                flex-direction: row;
            }

            .header-container h2 {
                margin: 0;
            }

            @media (max-width: 768px) {
                .header-container {
                    flex-direction: column;
                    padding: 15px;
                }

                .logo img {
                    margin: 0 auto 10px;
                }

                .header-container h2 {
                    font-size: 1.25rem; /* Adjust the font size for smaller screens */
                }
            }
        </style>
    </head>
    <body>
        <div class="header-container">
            <div class="logo">
                <img src="{{asset('logo.jpg')}}" alt="Logo" />
            </div>
            <h2 style="text-wrap: nowrap">FCPS SWAT REGISTERATION DATA</h2>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Student cnic</th>
                    <th>D_O_B</th>
                    <th>Domicile</th>
                    <th>Mobile Number</th>
                    <th>Permanent Address</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($member as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->student_name}}</td>
                    <td>{{$data->student_cnic}}</td>
                    <td>{{$data->D_O_B}}</td>
                    <td>{{$data->domicile}}</td>
                    <td>{{$data->mob_number}}</td>
                    <td>{{$data->permanet_address}}</td>
                    <td>{{$data->created_at}}</td>
                    <td class="text-center">
                        <a href="{{url('/generate-pdf')}}/{{$data->id}}">
                        <button
                            type="button"
                            class="btn btn-primary btn-sm"
                        >
                            Print
                        </button></a>
                        <a href="{{url('/edit')}}/{{$data->id}}">
                        <button
                            type="button"
                            class="btn btn-secondary btn-sm"
                        >
                            Edit
                        </button></a>
                        <a href="{{url('/delete')}}/{{$data->id}}">
                        <button
                            
                            type="button"
                            class="btn btn-danger btn-sm"
                        >
                            Delete
                        </button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
