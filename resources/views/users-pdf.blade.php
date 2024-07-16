<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FCPS DATA</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
    /* Importing fonts */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

    /* Reset and general styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        min-height: 100vh;
        align-items: center;
        justify-content: center;
        font-family: "Poppins", sans-serif;
        background-color: #f4f4f4;
        padding: 0 15px; /* Add padding to the body */
    }

    .wrapper {
        width: 100%;
        max-width: 1000px;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        margin: 0 auto; /* Center the wrapper horizontally */
    }

    header {
        text-align: center;
        font-size: 30px;
        font-weight: 600;
        background-color: #f7f7f7;
        padding: 44px 15px; /* Equal padding on left and right */
        border-radius: 8px 8px 0 0;
        border-bottom: 1px solid #bfbfbf;
        margin: 0 auto; /* Center the header horizontally */
    }

    .header-container {
        text-align: center;
        padding: 13px;
        font-size: 25px;
        font-weight: 600;
        background-color: #f7f7f7;
        color: #000000;
        border-bottom: 1px solid #bfbfbf;
        margin: 0 auto; /* Center the header container horizontally */
    }

    footer {
        font-size: 16px;
        font-weight: 600;
        background-color: #ffffff;
        padding: 12px;
        text-align: center;
    }

    .card-bor {
        border: 1px solid rgba(0, 0, 0, 0.12);
        margin: 15px;
        padding: 0 15px;
    }

    form {
        margin-top: 35px;
    }

    .dbl-field {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 0 15px;
    }

    .field {
        width: calc(31.33% - 10px); /* Three columns on desktop */
        margin-bottom: 20px;
    }

    .field input,
    .field textarea {
        width: 100%;
        height: 36px;
        font-size: 16px;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #bfbfbf;
        outline: none;
    }

    .field input::placeholder,
    .field textarea::placeholder {
        color: #bfbfbf;
    }

    .field input:focus,
    .field textarea:focus {
        border: 2px solid #0d6efd;
    }

    .button-area {
        margin-top: 25px;
        padding: 28px;
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        border-radius: 5px;
    }

    .logo img {
        width: 60px; /* Adjust the width as needed */
        height: auto; /* Maintain aspect ratio */
        margin-right: 10px;
        padding-top: 46px;
    }

    button {
        font-size: 18px;
        border: none;
        color: #fff;
        cursor: pointer;
        background: #0d6efd;
        padding: 8px 14px;
        border-radius: 5px;
    }

    @media (max-width: 600px) {
        .field {
            width: 100%; /* One column on mobile */
        }
        .dbl-field {
            flex-direction: column;
        }
        header {
            font-size: 24px;
            padding: 40px;
        }
        .logo img {
                    margin: 0 auto 10px;
        }
    }

    .logo {
        width: 59px;
        height: 59px;
        display: flex;
        flex-wrap: nowrap;
    }

    .custom-file {
        overflow: hidden;
        position: relative;
        cursor: pointer;
    }

    .custom-file-input {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .custom-file-label {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .form-check {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-right: 100px;
    }

    label {
        display: flex;
        align-items: center;
        padding-left: 20px;
        margin-bottom: 10px;
    }

    input[type="checkbox"] {
        margin-right: 10px;
    }

    .scholarship {
        padding: 20px;
    }

    .table-container {
        width: auto;
        margin: 25px;
        overflow-x: auto;
    }

    table {
        width: 100%;
        background-color: #fff;
        overflow: hidden;
        margin: 12px 0;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border: 1.5px solid black;
    }

    th {
        background-color: #f7f7f7;
        color: #000000;
    }

    .form-header {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

</style>

</head>
<body>
    <div class="header-container">
      <div class="logo">
        <img src="logo.jpg" alt="Logo">
      </div>
        <h3 style="padding-left: 50px">FATMA COLLEGE OF PROFESSIONAL SCIENCES SWAT</h3>
    </div>
    <div class="wrapper">
        <h6 style="text-align:center">ADMISSION FORM</h6>
        <p style="text-align:center; font-size: 10.5px">(NAME / FATHER NAMES SHOULD BE IN CAPITAL LETTERS)</p>
        
        <div class="form-header">
            <div class="form-image" style="text-align:center;">
                <img src="image/{{$member->image}}" alt="Student Image">
            </div>
            
            <div class="form-details">
                <table>
                    <tr>
                        <th>Student Name:</th>
                        <td>{{$member->student_name}}</td>
                    </tr>
                    <tr>
                        <th>Student NIC:</th>
                        <td>{{$member->student_cnic}}</td>
                    </tr>
                    <tr>
                        <th>Father Name:</th>
                        <td>{{$member->father_name}}</td>
                    </tr>
                    <tr>
                        <th>Father NIC:</th>
                        <td>{{$member->father_cnic}}</td>
                    </tr>
                    <tr>
                        <th>Guardian’s Name:</th>
                        <td>{{$member->guardian_name}}</td>
                    </tr>
                </table>
            </div>
        
      <div class="form-details">
        <table>
            <tr>
                <th>Gender:</th>
                <td>{{$member->gender}}</td>
                <th>D.O.B:</th>
                <td>{{$member->D_O_B}}</td>
                <th>B.Group:</th>
                <td>{{$member->B_Group}}</td>
            </tr>
            <tr>
                <th>Nationality:</th>
                <td>{{$member->nationality}}</td>
                <th>Religion:</th>
                <td>{{$member->religion}}</td>
                <th>Domicile:</th>
                <td>{{$member->domicile}}</td>
            </tr>
            <tr>
                <th>Mob No:</th>
                <td>{{$member->mob_number}}</td>
                <th>W. No:</th>
                <td>{{$member->w_number}}</td>
                <th>F/G. Phone No:</th>
                <td>{{$member->fg_number}}</td>
            </tr>
            <tr>
                <th>Father Occupation:</th>
                <td>{{$member->father_occupation}}</td>
                <th>Father income:</th>
                <td>{{$member->father_income}}</td>
                <th></th>
                <td></td>
            </tr>
        </table>
      </div>

      <div class="form-details">
        <table>
            <tr>
                <th>Permanent Address:</th>
                <td>{{$member->permanet_address}}</td>
                <th>Postal Address:</th>
                <td>{{$member->postal_address}}</td>
            </tr>
            <tr>
                <th>PROGRAM:</th>
                <td>{{$member->program}}</td>
                <th>Shift:</th>
                <td>{{$member->show_shift == "1" ? "Morning" : "Evening"}}</td>
            </tr>
        </table>
      </div>

      <div class="form-details">
        <table>
        <tr>
                        <th>Open Merit:</th>
                        <td>{{ is_array($member->show_option) && in_array("1", $member->show_option) ? "yes" : "no" }}</td>
                        <th>Scholarship:</th>
                        <td>{{ is_array($member->show_option) && in_array("2", $member->show_option) ? "yes" : "no" }}</td>
                        <th>Qouta:</th>
                        <td>{{ is_array($member->show_option) && in_array("3", $member->show_option) ? "yes" : "no" }}</td>
                    </tr>
                    <tr>
                        <th>Hafiz Quran:</th>
                        <td>{{ is_array($member->show_option) && in_array("4", $member->show_option) ? "yes" : "no" }}</td>
                        <th>Disable:</th>
                        <td>{{ is_array($member->show_option) && in_array("5", $member->show_option) ? "yes" : "no" }}</td>
                        <th>Orphan:</th>
                        <td>{{ is_array($member->show_option) && in_array("6", $member->show_option) ? "yes" : "no" }}</td>
                    </tr>
        </table>
      </div>

          <div class="form-details">
            <table>
                <tr>
                    <th>Qualification</th>
                    <th>Name of Institution/Board</th>
                    <th>Roll No</th>
                    <th>Passing Year</th>
                    <th>Marks Obtained</th>
                    <th>% / Div.</th>
                </tr>
                <tr>
                    <td>SSC</td>
                    <td>{{$member->ssc_institution_name}}</td>
                    <td>{{$member->ssc_roll_no}}</td>
                    <td>{{$member->ssc_passing_year}}</td>
                    <td>{{$member->ssc_marks_obtained}}</td>
                    <td>{{$member->ssc_div}}</td>
                </tr>
                <tr>
                    <td>Inter/HSSC/A-Level</td>
                    <td>{{$member->institution_name}}</td>
                    <td>{{$member->roll_no}}</td>
                    <td>{{$member->passing_year}}</td>
                    <td>{{$member->marks_obtained}}</td>
                    <td>{{$member->div}}</td>
                </tr>
            </table>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
