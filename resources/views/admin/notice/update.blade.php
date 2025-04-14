
@extends('layouts.default')

@section('content')

            <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-clipboard"></i> Notice Board</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Notice Board</li>
                    </ol>
                </div>
            </div>
        
                                    <form role="form" method="post" action="{{route('notice.store')}}" id="btnSubmit" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{$notice->id}}">
                                                <label for="message-text" class="control-label">Notice Title</label>
                                                <input type="text" class="form-control"  name="noticetitle" id="message-text1" value="{{$notice->noticetitle}}" maxlength="150">
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="control-label">Document</label>
                                                <label for="recipient-name1" class="control-label">Title</label>
                                                <input type="file" name="file_url" class="form-control" id="recipient-name1" required>
                                            </div> -->
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{$notice->id}}">
                                                <label for="message-text" class="control-label">Published Date</label>
                                                <input type="date" value="{{$notice->publisheddate}}" name="publisheddate" class="form-control" id="recipient-name1" required>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{route('notice')}}"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                    </form>

@endsection