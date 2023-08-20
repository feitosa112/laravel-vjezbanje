<form action="/add-user-grade" method="POST">
    @csrf
    <input type="text" name="profesor" placeholder="unesite ime profesora"><br>
    <input type="text"name="predmet" placeholder="unesite predmet"><br>
    <input type="number" name="ocena" placeholder="unesite ocenu"><br>
    <button type="submit" name="save">Save</button>
</form>