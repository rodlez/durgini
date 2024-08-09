<?php

declare(strict_types=1);

namespace App\Controllers;

// Controllers are classes responsible to render a page content,
// by convention PagenameController for the class and the filename.
// Responsible to render the content from the About Page

use Framework\TemplateEngine;

use App\Services\{ValidatorService, ContactService, PaginationService};


class ContactController
{
    // We inject now the instance(private TemplateEngine $view) in the __construct method
    // instead of create using $this->view = new TemplateEngine(Paths::VIEW)

    public function __construct(
        private TemplateEngine $view,
        private ContactService $contactService,
        private ValidatorService $validatorService,
        private PaginationService $paginationService
    ) {}

    public function contactView()
    {

        isset($_GET['asunto']) ? $param = $_GET['asunto'] : $param = null;

        echo $this->view->render("contacto.php", [
            'title' => 'Contacto',
            'sitemap' => '<a href="/">Home</a> / <b>Contacto</b>',
            'header' => "Contacto page",
            'dangerousData' => '<script>alert(123)</script>',
            'asunto' => $param
        ]);
    }

    /**
     * Receives the register form data using the HTTPD POST method 
     * 
     * * 1 - Validate the form. 
     * * 2 - Check if the Email already exists.
     * * 3 - Create New user in the DB and generate a $_SESSION with the user values.
     * * 4 - Redirect to the main page.
     */

    public function contact()
    {
        showNice($_POST, 'POST FORM');
        $this->validatorService->validateContact($_POST, 'es');

        $this->contactService->newContact($_POST);

        redirectTo('/contacto/ok');
    }

    public function contactOk()
    {
        echo $this->view->render("contacto-ok.php", [
            'title' => 'Contacto',
            'sitemap' => '<a href="/">Home</a> / <b>Contacto</b>',
            'header' => "Contacto page",
            'dangerousData' => '<script>alert(123)</script>'
        ]);
    }

    /* ********************************************** ADMIN *************************************************** */

    /**
     * Render the admin panel to manage the newsletter (/admin/newsletter/index.php) using the render method in the TemplateEngine class
     */

    public function adminContactView()
    {
        //debugator($_GET);
        $pagination = $this->paginationService->generatePagination($_GET, 'email', 'email');

        [$list, $totalResults] = $this->contactService->getContacts($pagination);

        [$pageLinks, $previousPageQuery, $nextPageQuery, $lastPage] = $this->paginationService->generatePaginationLinks($totalResults, $pagination);

        echo $this->view->render("/admin/contact/index.php", [
            // Template information
            'title' => 'Admin Panel',
            'sitemap' => '<a href="/admin">Admin</a> / <b>Contact</b>',
            'header' => 'Contact List',
            // query
            'contactList' => $list,
            'totalResults' => $totalResults,
            // pagination
            'perPage' => $pagination['perPage'],
            'currentPage' => $pagination['page'],
            'pageLinks' => $pageLinks,
            'previousPageQuery' => $previousPageQuery[0],
            'nextPageQuery' =>  $nextPageQuery[0],
            'lastPage' => $lastPage,
            // search
            'searchTerm' => $pagination['searchTerm'],
            'searchCol' => $pagination['searchCol'],
            // sorting
            'sort' => $pagination['sort'],
            'direction' => $pagination['direction']
        ]);
    }
}
