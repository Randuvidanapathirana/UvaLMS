<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        /* The Modal (background) */
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 20%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        }

        /* The Close Button */
        .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        }    

        .borrow:hover{
            color: coral;
        }
    </style>
</head>
<body>
    <!-- Modal content -->
    <div class="modal-content"> 
        <label for="book name" class="form-control">Request for</label>
        
        <div class="modal-body">
            <form action="{{ route('books.borrow.request') }}" method="post">
                @csrf
                <input type="hidden" name="student_id" value="001">
                <input type="text" name="book_name" class="form-control" value="{{ $book->book_name }}" placeholder="{{ $book->book_name }}" readonly><br>
                <input type="text" name="book_id" class="form-control" value="{{ $book->book_id }}" placeholder="{{ $book->book_id }}" readonly><br>
                <textarea name="user_message" id="user_message" class="form-control" rows="5" placeholder="Enter your message (Keep empty if there is no message)"></textarea>
                <button type="submit" class="btn btn-success mt-4">
                    <i class="fa fa-send"></i> Send Request Now
                </button>
                <a href="{{ route('books.request')}}" class="btn btn-secondary mt-4" data-dismiss="modal">Cancel</a>
            </form>
        </div>    
    </div>
</body>
</html>