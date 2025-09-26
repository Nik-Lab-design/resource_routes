<h1>Bewerk medewerker</h1>
<form method="POST" action="{{ route('employees.update', $employee) }}">
    @csrf @method('PUT')
    <input type="text" name="firstname" value="{{ $employee->firstname }}" required>
    <input type="text" name="lastname" value="{{ $employee->lastname }}" required>
    <button type="submit">Opslaan</button>
    <a href="{{ route('employees.index') }}">Annuleren</a>
</form>