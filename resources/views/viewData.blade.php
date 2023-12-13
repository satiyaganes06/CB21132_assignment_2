<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <div class=" col-8 mt-5">

        <h1 class="m-5 mb-3"><strong>Student Management System</strong></h1>
        <?php
        ?>

        <div class="m-5 mb-0">
            <form action="{{ url('/students') }}" method="GET">
            <label for="gender">Filter by Gender:</label>
           
            <select name="gender" id="gender">
                <option  value="">All</option>
                <option  value="M" @if(request('gender')=='M' ) selected @endif>Male</option>
                <option  value="F" @if(request('gender')=='F' ) selected @endif>Female</option>
            </select>
            <button class="btn btn-primary mt-1" type="submit">Filter</button>
        </form>
        </div>

        

        <table class="table align-middle mb-3">
            <thead>
                <tr>
                    <th scope="col"><strong>ID</strong></th>
                    <th scope="col"><strong>School</strong></th>
                    <th scope="col"><strong>Sex</strong></th>
                    <th scope="col"><strong>Age</strong></th>
                    <th scope="col"><strong>Address</strong></th>
                    <th scope="col"><strong>Family Size</strong></th>
                    <th scope="col"><strong>Parent's Cohabitation Status</strong></th>
                    <th scope="col"><strong>Mother's Education</strong></th>
                    <th scope="col"><strong>Father's Education</strong></th>
                    <th scope="col"><strong>Mother's Job</strong></th>
                    <th scope="col"><strong>Father's Job</strong></th>
                    <th scope="col"><strong>Reason to Choose School</strong></th>
                    <th scope="col"><strong>Guardian</strong></th>
                    <th scope="col"><strong>Travel Time</strong></th>
                    <th scope="col"><strong>Study Time</strong></th>
                    <th scope="col"><strong>Failures</strong></th>
                    <th scope="col"><strong>Extra Educational Support</strong></th>
                    <th scope="col"><strong>Family Educational Support</strong></th>
                    <th scope="col"><strong>Extra Paid Classes</strong></th>
                    <th scope="col"><strong>Extra-Curricular Activities</strong></th>
                    <th scope="col"><strong>Attended Nursery School</strong></th>
                    <th scope="col"><strong>Wants to Take Higher Education</strong></th>
                    <th scope="col"><strong>Internet Access at Home</strong></th>
                    <th scope="col"><strong>With a Romantic Relationship</strong></th>
                    <th scope="col"><strong>Quality of Family Relationships</strong></th>
                    <th scope="col"><strong>Free Time</strong></th>
                    <th scope="col"><strong>Going Out with Friends</strong></th>
                    <th scope="col"><strong>Workday Alcohol Consumption</strong></th>
                    <th scope="col"><strong>Weekend Alcohol Consumption</strong></th>
                    <th scope="col"><strong>Health Status</strong></th>
                    <th scope="col"><strong>Number of School Absences</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student) : ?>
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->school }}</td>
                        <td>{{ $student->sex }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->famsize }}</td>
                        <td>{{ $student->Pstatus }}</td>
                        <td>{{ $student->Medu }}</td>
                        <td>{{ $student->Fedu }}</td>
                        <td>{{ $student->Mjob }}</td>
                        <td>{{ $student->Fjob }}</td>
                        <td>{{ $student->reason }}</td>
                        <td>{{ $student->guardian }}</td>
                        <td>{{ $student->traveltime }}</td>
                        <td>{{ $student->studytime }}</td>
                        <td>{{ $student->failures }}</td>
                        <td>{{ $student->schoolsup }}</td>
                        <td>{{ $student->famsup }}</td>
                        <td>{{ $student->paid }}</td>
                        <td>{{ $student->activities }}</td>
                        <td>{{ $student->nursery }}</td>
                        <td>{{ $student->higher }}</td>
                        <td>{{ $student->internet }}</td>
                        <td>{{ $student->romantic }}</td>
                        <td>{{ $student->famrel }}</td>
                        <td>{{ $student->freetime }}</td>
                        <td>{{ $student->goout }}</td>
                        <td>{{ $student->Dalc }}</td>
                        <td>{{ $student->Walc }}</td>
                        <td>{{ $student->health }}</td>
                        <td>{{ $student->absences }}</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>

</body>

</html>