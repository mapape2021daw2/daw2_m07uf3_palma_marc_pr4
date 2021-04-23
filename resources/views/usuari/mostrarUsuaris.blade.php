<!DOCTPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Visualitza dades d'estudiants</title>
    </head>
    <body>
        @if(\Session::has('Exit'))
            <div class="alert alert-success">
                <p>{{\Session::get('Exit')}}</p>
            </div>
        @endif
        <table border = "1">
            <tr>
                <td>Id</td>
                <td>Nom</td>
                <td>Cognoms</td>
                <td>Correu</td>
            </tr>
            @foreach ($usuaris as $usuari) 
                <tr>
                    <td>{{ $usuari->codi }}</td>
                    <td>{{ $usuari->nom }}</td>
                    <td>{{ $usuari->cognoms }}</td>
                    <td>{{ $usuari->email }}</td>                
                </tr>
            @endforeach
        </table>
    </body>
</html>