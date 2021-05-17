<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://www.ourmanna.com/verses/api/?order=random">
    <title>Bible Study Request Form</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}" />
</head>
<body class="d-flex align-content-start flex-wrap">
    <div class="d-flex align-content-start flex-wrap">
        <div class=" mt-5 pt-5">
            <div class="text-center mt-5 pt-5">
                <h1>Bible Study Request Form</h1>
            </div>
        </div>
                <div class="#ourmanna-verse">
                    <div id="ourmanna-verse">Loading...</div>
                    <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
                    </div>
                </div>

                <form action="/bible-study-create" medthod="POST" class="container pt-3 pr-3 pl-3 pb-3">
                
                <input type="hidden" value="{{ $bible_study_request->id }}" name="id" >

                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="form-control form-rounded" type="text" name="name" placeholder="ex. Juan Dela Cruz">
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-10">
                        <input type="form-control form-rounded" type="text" name="email" placeholder="email@gmail.com">
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Contact Number</label>
                    <div class="col-sm-10">
                        <input type="form-control form-rounded" type="number" name="cellphone number" placeholder="09xxxxxxxxx">
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
                    <div class="col-sm-10">
                        <input type="form-control form-rounded" type="date" name="birthdate" placeholder="MM/DD/YY">
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="Religious Affil" class="col-sm-2 col-form-label">Religious Affiliation</label>
                    <div class="col-sm-10">
                        <input type="form-control form-rounded" type="text" name="Religious Affil" placeholder="ex. MCGI">
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="BStudyDate" class="col-sm-2 col-form-label">Bible Study Date</label>
                    <div class="col-sm-10">
                        <input type="form-control form-rounded" type="date" name="BStudyDate" placeholder="MM/DD/YY">
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="BStudyTime" class="col-sm-2 col-form-label">Bible Study Time</label>
                    <div class="col-sm-10">
                        <input type="form-control form-rounded" type="number" name="BStudyTime" placeholder="ex. 01:00PM">
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="BStudyLocation" class="col-sm-2 col-form-label">Bible Study Location</label>
                    <div class="col-sm-10">
                        <input type="form-control form-rounded" type="text" name="BStudyLocation" placeholder="ex. San Juan St. Marikina City">
                    </div>
                </div>
                <br>

                <div class="container">
                    <a class="ml-5" href="/thank-you">
                        <button class="btn-lg btn- dark">Submit Request</button>
                </div>   
    </div>           
</body>
    <script src=<script src="http://www.ourmanna.com/verses/api/get?format=text&order=random" type="text/javascript"></script>
</html>