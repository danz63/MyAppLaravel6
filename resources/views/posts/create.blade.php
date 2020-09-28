<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"
        integrity="sha512-LW9+kKj/cBGHqnI4ok24dUWNR/e8sUD8RLzak1mNw5Ja2JYCmTXJTF5VpgFSw+VoBfpMvPScCo2DnKTIUjrzYw=="
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar has-background-light" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
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
                    <a class="navbar-item" href="{{ route('posts.index') }}">
                        Read
                    </a>
                    <a class="navbar-item is-active" href="#">
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
                            <h1 class="is-size-2 mt-4">Insert Post Data</h1>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <form action="{{ route('posts.store') }}" method="POST">
                                @csrf
                                <div class="field">
                                    <label for="title" class="label">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Insert A Title"
                                        class="input" autocomplete="off">
                                </div>
                                <div class="field">
                                    <label for="content" class="label">Content</label>
                                    <textarea name="content" id="content" class="textarea"
                                        placeholder="Insert A Content"></textarea>
                                </div>
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button class="button is-primary" type="submit">
                                            <i class="fas fa-save"></i> &nbsp; Save
                                        </button>
                                    </div>
                                    <div class="control">
                                        <button class="button is-danger" type="reset">
                                            <i class="fas fa-sync-alt"></i> &nbsp; Reset
                                        </button>
                                    </div>
                                    <div class="control">
                                        <a href="{{ route('posts.index') }}" class="button is-warning">
                                            <i class="fas fa-backward"></i> &nbsp; Back
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</body>

</html>