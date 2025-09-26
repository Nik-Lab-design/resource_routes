<h1>Nieuwe medewerker</h1>
<form method="POST" action="{{ route('employees.store') }}">
    @csrf
    <input type="text" name="firstname" placeholder="Voornaam" required>
    <input type="text" name="lastname" placeholder="Achternaam" required>
    <button type="submit">Opslaan</button>
    <a href="{{ route('employees.index') }}">Annuleren</a>
</form>