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
        a:hover{
            text-decoration: underline;
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
        }
        #connection{
            width: 75%;
            height: 20px;
            grid-row: 1;
            grid-column: 10;
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
        #profil:hover{
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
<body>
{{-- modal d'impossibilité de suppression --}}
    <div class="modal" id="exp">
    <h2 style="text-align:center">-- Vous ne pouvez pas supprimer un message qui vous appartient pas -- <span style="text-align:right;" class="closeBtn" onclick="document.getElementById('exp').style.display = 'none'">X</span></h2>
    </div>
{{-- modal d'impossibilité de modification --}}
    <div class="modal" id="exp2">
    <h2 style="text-align:center">-- Vous ne pouvez pas modifier un message qui vous appartient pas -- <span style="text-align:right;" class="closeBtn" onclick="document.getElementById('exp2').style.display = 'none'">X</span></h2>
    </div>
    <script>
        function Ez_x() {
            document.getElementById('exp').style.display = 'block';
            }
            function Ez_edit() {
            document.getElementById('exp2').style.display = 'block';
            }
    </script>
</body>
</html>
<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:px-8">
        @if (isset($topic_id))
        <form method="POST" action="{{ "/topics/{$topic_id}/messages" }}">
            @csrf
            <textarea
                name="message"
                placeholder="{{ __('message ?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Créer Message') }}</x-primary-button>
        </form>
        @endif
        
        <p style="text-align: center;">Voici les différents messages.</p>
        <div style="margin-top:50px;">
            <table id="conteneur">
                <tr>
                    <td id="colone1">Edit</td>
                    <td class="colone2">Nom du message</td>
                    <td id="colone3">Créateur</td>
                    <td id="colone4">date de création</td>
                    <td id="colone5">Supprimer message</td>
                </tr>
            </table>
            </div>
<!-- Table des Message -->
        @foreach ($messages as $message)
        <table id="conteneur2" class="message">
            <tr>
                @if ($message->user->is(auth()->user()))
                <td class="colone1">
                    <a href="{{route('messages.edit', $message)}}">
                    {{ __('Edit') }}
                    </a>
                </td>
                @endif
                @if (!$message->user->is(auth()->user()))
                <td class="colone1">
                    <span onclick="Ez_edit()" style="cursor: pointer">Edit</span>
                </td>
                @endif
                <td id="colone2">
                    <span>{{$message->message}}</span>
                </td>
                <td id="colone3">{{$message->user->name }}</td>
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
        @endforeach
    </div>
</x-app-layout>