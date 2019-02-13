<?php

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="megaMenu">
    <a class="navbar-brand" href="../../Forms/Main/">S4</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <!-- Main Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="../../Forms/Main/">Main Menu <span class="sr-only">(current)</span></a>
            </li>
            <!-- Landing Page -->
            <li class="nav-item">
                <a class="nav-link" href="../../Forms/Search/">Search</a>
            </li>
            <!-- Statistics -->
            <li class="nav-item">
                <a class="nav-link" href="../../Forms/Statistics/">Statistics</a>
            </li>
            <!-- Manage -->
            <li class="nav-item">
                <a class="nav-link" href="../../Forms/Manage/">Manage</a>
            </li>
            <!-- Upload -->
            <li class="nav-item">
                <a class="nav-link" href="../../Forms/Upload/">Upload Documents</a>
            </li>
        </ul>
        <!-- right side -->
        <!-- Website Errors -->
        <ul class="navbar-nav ml-auto">
            <!-- Bug Reporting (Website errors) -->
            <li class="nav-item" data-toggle="modal" data-target="#bugReportModal">
                <a class="nav-link">
                    <i class="fas fa-bug"></i>
                </a>
            </li>
            <!-- User Options -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="User Settings">
                    <a class="dropdown-item" href="#">Account Settings</a>
                    <a class="dropdown-item" href="#">Logout as user</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- Response Modal -->
<div class="modal fade" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="answerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="answerModalTitle">Success!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="answer"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Javascript for the form found in master.js -->