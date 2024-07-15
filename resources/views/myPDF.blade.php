<!-- resources/views/myPDF.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Laravel PDF</title>
</head>
<body>
    <h1>TIKET KONSER LIVEWIRE FESTIVAL</h1>
    <br>
    <img src="{{ asset('https://scontent.fbdo1-1.fna.fbcdn.net/v/t39.30808-6/450954095_409342938810394_3567298132556442856_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeHTySLA4oPiTPxUZUCWppUj1QjvYjYy2e_VCO9iNjLZ74p37B_Tgz4d2KyddEk2jvXKvC5JMf0JR2kcppANdzjq&_nc_ohc=qbj7Hwy5f7gQ7kNvgGKO4h-&_nc_zt=23&_nc_ht=scontent.fbdo1-1.fna&oh=00_AYBGSp5IlnZRocrDL561E_ufAsX7LpeZ6NbHozZ-9obFTA&oe=669AB5F4 ')}}" alt="tiket konser">

    <div>
        <a href="{{ route('download.pdf') }}" class="btn btn-success mb-3">Download</a>
    </div>
</body>
</html>
