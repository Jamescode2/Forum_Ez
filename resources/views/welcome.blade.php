<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Forum Project EZ</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap');
        body {
            font-family: 'Nunito', sans-serif;
            
        }
        *{
            margin: 0;
            padding: 0;
        }
        a{
            cursor: pointer;
        }
        #head{
            display: grid;
            justify-items: center;
            align-items: baseline;
            grid-template-columns: repeat(10, 10%);
            grid-template-rows: repeat(10, 10%);
            width: 100%;
            height: 300px;
            background: rgb(40,52,180);
            background: linear-gradient(188deg, rgba(40,52,180,0.8438725832129726) 29%, rgba(254,254,255,0.8718837876947654) 52%, rgba(71,69,217,0.8354692218684349) 74%);
        }
        #btnDeco{
            width: 75%;
            height: 20px;
            grid-row: 1;
            grid-column: 10;
            border: 1px solid black;
            background-color: #ccc;
            text-decoration: none;
            color: black;
            text-align: center;
        }
        .modal{
            display:none;
            width:65vw;
            position:fixed;
            top:20%;
            left:20%;
            flex-direction:column;
            justify-content:space-around;
            color:white;
            background-color:rgba(0,0,0,0.9);
        }
        #inscription{
            width: 75%;
            height: 20px;
            grid-row: 1;
            grid-column: 9;
            text-align: center;
            text-decoration: none;
            color: black;
            background-color: #ccc;
        }
        #connection{
            width: 75%;
            height: 20px;
            grid-row: 1;
            grid-column: 10;
            text-align: center;
            text-decoration: none;
            color: black;
            background-color: #ccc;
        }
        #profil{
            width: 150%;
            height: 20px;
            grid-row: 1;
            grid-column: 9;
            text-align: center;
            text-decoration: none;
            color: black;
            background-color: #ccc;
        }
        #profil:hover,
        #inscription:hover,
        #connection:hover{
            background-color: black;
            color: white;
        }
        #titre{
            font-size: 40PX;
            font-family: 'Zen Dots', cursive;
            grid-row: 3/4;
            grid-column: 5/7;
            text-align: center;
            vertical-align: middle;
        }
        #conteneur{
            margin: 0% 10%;
            width: 80%;
            height: auto;
            border: 2px solid red;
            border-radius: 2em 2em 0 0 ;
            text-align: center;
            font-weight: bold;
            background-color: black;
            color: white;
        }
        #conteneur2{
            margin: 0% 10%;
            width: 80%;
            height: auto;
            border: 2px solid black;
            text-align: center;
            font-weight: bold;
            background-color: rgb(102, 99, 99);
            color: white;
        }
        #index{
            border: 2px solid white;
        }
        #colone1{
            border: 2px solid white;
            border-radius: 1.8em 0 0 0;
            width: 40px;
            padding: 10px;
        }
        .colone1{
            border: 2px solid white;
            width: 40px;
            padding: 10px;
        }
        #colone2{
            border: 2px solid white;
            width: 600px;
        }
        .colone2{
            border-radius: 1.8em 0 0 0;
            border: 2px solid white;
            width: 600px;
        }
        #colone3{
            border: 2px solid white;
            width: 100px;
        }
        #colone4{
            border: 2px solid white;
            width: 100px;
        }
        #colone5{
            border: 2px solid white;
            border-radius: 0 1.8em 0 0;
            width: 100px;
        }
        .colone5{
            border: 2px solid white;
            width: 100px;
        }
        .modal{
            display:none;
            width:65vw;
            position:fixed;
            top:20%;
            left:20%;
            flex-direction:column;
            justify-content:space-around;
            color:white;
            background-color:rgba(0,0,0,0.9);
        }

        .pseudoTxtarea{
            margin-left: 35%;
            height:20px;
            overflow:auto;
            max-width:100%;
            width:200px;
            background-color:#ccc;
            color:#333;
            font-size:20px;
            padding:1em;
        }
        .pseudoBtn{
            margin: 10px;
            width: 150px;
            margin-top: 20px;
        }
        .pseudoBtn:hover{
            background-color: black;
            color: white;
        }
        #btnDeco:hover{
            background-color: black;
            color: white;
        }
        .form{
            gap: 10px;
            width: 100%;
            display: flex ;
            flex-direction: column;
        }
        .tdIcons img{
            padding-left:.5rem;
        }
        .tdIcons img:hover{
            cursor:pointer;
        }
        .edit{
            gap:5px;
            width: 400px;
            height: 40px;
        }
        h4{
            margin: 0 20%;
            font-size: 20px;
            height: 40px;
            border: 2px solid white;
        }
        .icon{
            justify-content: space-between;
        }
        #createTopic{
            width: 100%;
            display: grid;
            grid-template-columns: (repeat(10,10%));
        }
        #createTopicBtn{
            grid-column: 7;
        }
        .create{
            margin: 1% 20%;
            height: 25px;
            max-width: 100%;
            width: 600px;
            padding: 0.5em;
        }
        .pseudoTxtarea2{
            margin-left: 20%;
            height:200px;
            overflow:auto;
            max-width:100%;
            width:600px;
            background-color:#ccc;
            color:#333;
            font-size:20px;
            padding:1em;
        }

        .closeBtn{
            display:inline-block;
            height:50px;
            width:50px;
            line-height:50px;
            font-size:36px;
            text-align:center;
            background-color:#111;
            right:50%;
            color: #ccc;
        }

        #addBtn:hover,.closeBtn:hover,.pseudoBtn:hover{cursor:pointer;}

    </style>
</head>
<body class="bg-gradient-to-r from-green-400 to-blue-500">
<!-- Bouton du header permettant l'inscription, la connection, la déconnection & la consultation du profil -->
<header id="head">
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="pseudoBtn" id="profil">Allez sur le forum</a>
        @else
            <a href="{{ route('login') }}" class="pseudoBtn" id="connection">Connexion</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="pseudoBtn" id="inscription">inscription</a>
            @endif
        @endauth
    @endif
    
    <h1 id="titre">LE FORUM DES GEEKEZ</h1>
</header>
 <hr>


<div style="margin-top:50px;">
<table id="conteneur">
    <tr>
        <td class="colone2">Nom du Message</td>
        <td id="colone3">Créateur</td>
        <td id="colone4">Nom du Topic</td>
        <td id="colone4">date de création</td>
        <td id="colone5">Supprimer Message</td>
    </tr>
</table>
</div>
@if (isset($messages))
<!-- Table des Message -->
    @foreach ($messages as $message)
            <div>
                <table id="conteneur2" class="message">
                    <tr>
                        <td id="colone2">{{$message->message}}</td>
                        <td id="colone3">{{$message->user->name }}</td>
                        <td id="colone4">{{$topic->topic}}</td>
                        <td id="colone4"><small>{{ $message->created_at->format('j M Y, g:i a').','.$message->created_at->eq($message->updated_at) }}</small></td>
                        @if ($message->user->is(auth()->user()))
                        <td class="colone5">
                            <form method="POST" action="{{ route('messages.destroy', $message) }}">
                                @csrf
                                @method('delete')
                                <a :href="route('messages.destroy', $message)" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('X') }}
                                </a>
                            </form>
                        </td>
                        @endif
                        @if (!$message->user->is(auth()->user()))
                        <td class="colone5">
                            <span onclick="Ez_x()" style="cursor: pointer">X</span>
                        </td>
                        @endif
                    </tr>
                </table>
            </div>
    @endforeach
@endif

{{-- modal d'impossibilité de suppression --}}
<div class="modal" id="exp">
    <h2 style="text-align:center">-- Vous ne pouvez pas Supprimer un message qui vous appartient pas -- <span style="text-align:right;" class="closeBtn" onclick="document.getElementById('exp').style.display = 'none'">X</span></h2>
</div>

<footer style="text-align:center;color:red;font-weight: bold;margin:10px 0;position:absolute;bottom:0;left:42%;" >
    Forum EZ Créer par des GeekEZ
</footer>
<script>
    function Ez_x() {
        document.getElementById('exp').style.display = 'block';
        }
</script>
</body>
</html>