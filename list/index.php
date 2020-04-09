<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Create, share and collaborate on to-do lists, shopping lists and more. No registration required!">
    <meta name="keywords" content="list,share,collaborate,easy,easily,quick,quickly">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="/assets/css/main.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#34ae91">
    <link rel="shortcut icon" href="/assets/favicons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Splitlist">
    <meta name="application-name" content="Splitlist">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="/assets/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <title>Splitlist</title>

    <script src="/assets/js/theme.js"></script>
</head>

<body>
    <nav>
        <div class="nav-content">
            <div class="nav-left">
                <a href="/">
                    <img id="nav-logo" src="/assets/img/light-mode/logo.png" alt="Splitlist">
                </a>
            </div>

            <div class="nav-right">
                <button id="nav-open-list-button" class="button"><img src="/assets/icons/light-mode/open.svg" alt="Open">Open</button>
                <button id="nav-new-list-button" class="button button-teal"><img src="/assets/icons/always-light//add.svg" alt="New">New</button>
                <img id="dark-mode-button" src="/assets/icons/light-mode/dark-mode.svg" alt="Toggle dark mode">
            </div>
        </div>
    </nav>

    <div class="content">
        <h1 id="list-name"></h1>

        <p id="list-id">List ID: <b id="list-id-id"></b></p>
        <p id="item-count"><span id="item-count-number">0</span> items</p>

        <div class="button-group">
            <button class="button" id="edit-name-button">
                <img src="/assets/icons/light-mode/edit.svg" alt="">
                <span>Edit name</span>
            </button>

            <button class="button button-teal" id="share-list-button">
                <img src="/assets/icons/always-light/share.svg" alt="">
                <span>Copy link</span>
            </button>
        </div>

        <div id="list" class="list">

        </div>

        <button class="button center" id="new-item-button"><img src="/assets/icons/light-mode/add.svg" alt="Add"> New item</button>
    </div>

    <div id="open-list-modal" class="modal modal-hidden">
        <div class="modal-content">
            <h2>Open list</h2>
            <p>Input ID to open list:</p>
            <input type="text" id="open-list-modal-input" placeholder="List ID">
            <div class="modal-buttons">
                <div>
                    <button class="button close-modal">Cancel</button>
                </div>

                <div>
                    <button id="open-list-modal-open-button" class="button button-teal">Open</button>
                </div>
            </div>
        </div>
    </div>

    <div id="edit-name-modal" class="modal modal-hidden">
        <div class="modal-content">
            <h2>Edit list name</h2>
            <input type="text" id="edit-name-modal-input" placeholder="New name">
            <div class="modal-buttons">
                <div>
                    <button class="button close-modal">Cancel</button>
                </div>

                <div>
                    <button id="edit-name-modal-rename-button" class="button button-teal">Rename</button>
                </div>
            </div>
        </div>
    </div>

    <div class="snackbar" id="link-copied-snackbar">
        <p>Link was copied to clipboard. Go share it!</p>
    </div>

    <!-- Hidden sample element for list items -->
    <div id="sample-list-item" class="list-item hidden">
        <img src="/assets/icons/light-mode/drag-handle.svg" alt="Handle" class="drag-handle">

        <button class="icon-button check-button" tabindex="-1">
            <img src="/assets/icons/light-mode/checkbox-unchecked.svg" alt="Check">
        </button>

        <input type="text" class="text" value=""></span>

        <button class="icon-button remove-button" tabindex="-1">
            <img src="/assets/icons/light-mode/remove.svg" alt="Remove">
        </button>
    </div>

    <!-- Hidden HTML element used by script for copying text to clipboard -->
    <textarea id="clipboard-placeholder" readonly></textarea>

    <script src="/assets/js/sortable.js"></script>
    <script src="/assets/js/all.js"></script>
    <script src="/assets/js/list.js"></script>
</body>

</html>