<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>

<body>
    <nav class="navbar has-background-light" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ route('posts.index') }}">
                    <img src="{{ url('/logo.png') }}" width="64" height="128" alt="Image">
                </a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                    data-target="avbarHome">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="avbarHome" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item is-active" href="#">
                        Read
                    </a>
                    <a class="navbar-item" href="{{ route('posts.create') }}">
                        Create
                    </a>
                    <a class="navbar-item">
                        Update
                    </a>
                </div>

            </div>
        </div>
    </nav>
    <div class="container mt-6">

        <div class="columns mt-2">
            <div class="column">
                <div class="card has-background-light">
                    <div class="card-header">
                        <div class="card-header-title">
                            <h1 class="is-size-2 mt-4">Read Post Data</h1>
                        </div>
                    </div>
                    <div class="card-content mb-4">
                        <div class="level">
                            <div class="level-left"></div>
                            <div class="level-right">
                                <a href=" {{ route('posts.create') }}" class="button is-success">+ &nbsp;Add data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <table class="table is-striped is-hoverable is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->content }}</td>
                                        <td>
                                            <form onsubmit="return confirm('Are You Sure?');"
                                                action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                                <a href="{{ route('posts.edit', $post->id) }}"
                                                    class="button is-small is-primary">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="button is-small is-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>