@extends('user.pages.index')

@section('title', 'Messages')

@section('messages')
    <div class="d-flex justify-content-center align-items-center" style="height: 130vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center mb-4">
                        <button class="btn btn-primary mr-2" onclick="openMessageList()">Get Message</button>
                        <button class="btn btn-primary" onclick="openMessageForm()">Send Message</button>
                    </div>

                    <div id="messageList" style="display:none; overflow-y: scroll; max-height: 500px;">
                        @foreach ($messages->where('admin_id', 1)->sortBy('created_at') as $message)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Admin</h5>
                                    <p class="card-text">{{ $message->content }}</p>
                                    <p class="card-text">Date: {{ $message->created_at }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div id="messageForm" style="display: none;">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="messageList1" style="display:none; overflow-y: scroll; max-height: 500px;">
                                    @foreach ($messages->where('admin_id', 1)->sortBy('created_at') as $message)
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h5 class="card-title">Admin</h5>
                                                <p class="card-text">{{ $message->content }}</p>
                                                <p class="card-text">Date: {{ $message->created_at }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ asset('account/message/send') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="message">Your Messages:</label>
                                        <textarea name="content" class="form-control" id="message" rows="5" placeholder="Write your message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openMessageList() {
            document.getElementById("messageList").style.display = "block";
            document.getElementById("messageForm").style.display = "none";
            document.getElementById("messageList1").style.display = "none";
        }

        function openMessageForm() {
            document.getElementById("messageForm").style.display = "block";
            document.getElementById("messageList1").style.display = "block";
            document.getElementById("messageList").style.display = "none";
        }
    </script>
@endsection
