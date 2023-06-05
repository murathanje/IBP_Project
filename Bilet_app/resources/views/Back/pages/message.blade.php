@extends('back.pages.master')

@section('title', 'Messages')

@section('backmessage')
<div class="text-center mb-4">
    <button class="btn btn-primary mr-2" onclick="openMessageList()">Show Messages</button>
    <button class="btn btn-primary" onclick="openMessageForm()">Hide</button>
</div>
    <div class="d-flex justify-content-center align-items-center" style="height: 130vh; overflow-y: scroll;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">

                    <div id="messageList" style="display:none">
                        @foreach ($messages->where('admin_id', 0)->sortBy('created_at') as $message)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $message->users_first_name }}</h5>
                                    <p class="card-text">{{ $message->content }}</p>
                                    <p class="card-text">User: {{ $message->user_id }}</p>
                                    <p class="card-text">Date: {{ $message->created_at }}</p>
                                    <form action="{{ asset('admin/message/send') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $message->user_id }}">
                                        <div class="form-group">
                                            <textarea name="content" class="form-control" id="replyMessage" rows="3" placeholder="Write your reply"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openMessageList() {
            document.getElementById("messageList").style.display = "block";
        }

        function openMessageForm() {
            document.getElementById("messageList").style.display = "none";
        }
    </script>
@endsection
