<h1>Employees</h1>
<a href="{{ route('employees.create') }}">Nieuwe medewerker</a>
<ul>
    @foreach ($employees as $employee)
        <li>
            {{ $employee->firstname }} {{ $employee->lastname }}
            <a href="{{ route('employees.show', $employee) }}">Bekijken</a>
            <a href="{{ route('employees.edit', $employee) }}">Bewerken</a>
            <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Verwijderen</button>
            </form>
        </li>
    @endforeach