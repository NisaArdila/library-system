<!DOCTYPE html>
<html lang="id">
    <head>
    <meta charset="UTF-8">
        <title>
            @yield('title')
        </title>
    </head>
    <body>
        <header>
            <h1>Library System</h1>
            <nav>
            <a href="/dashboard">Dashboard</a> |
            <a href="/books">Books</a> |
            <a href="/categories">Categories</a> |
            <a href="/members">Members</a>
        </nav>
            <hr>
        </header>
        <main>
            @yield('content')
        </main>
        <footer style="margin-top: 30px; padding: 15px; border-top: 1px solid #ddd;">
            <p>© 2026 Library System</p>
        </footer>
    </body>
</html>