@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="/timetable" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pub">Faculty:</label>
                            <input type="text" class="form-control-file" name="faculty" id="faculty"><br>

                            <label for="pub">Year of Study</label>
                            <input type="number" class="form-control-file" name="study_year" id="year"><br>

                            <label for="pub">Cohort start</label>
                            <input type="text" class="form-control-file" name="session_start" id="start"><br>

                            <label for="pub">Cohort end</label>
                            <input type="text" class="form-control-file" name="session_end" id="session_end"><br>

                            <label for="pub">Exam Timetable</label>
                            <input type="file" class="form-control-file" name="timetable" id="timetable" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted"></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
