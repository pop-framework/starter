<?php 
namespace App\Controller;

use Pop\Controller\AbstractController;

class BookController extends AbstractController
{
    public function index()
    {
        $dbm = $this->databaseManager;

        $books = $dbm->find();

        return $this->render("pages/book/index", [
            'books' => $books
        ]);
    }

    public function create()
    {
        $form = $this->form(BookForm::class);

        if ($form->submitted())
        {
            if ($form->isValid())
            {
                $dbm = $this->databaseManager;
                $id = $dbm->save($form->getData());
                // $id = $dbm->add($form->getData());

                if ($id)
                {
                    $this->redirectTo('book:read', [
                        'id' => $id,
                    ]);
                }
            }
        }

        return $this->render('pages/book/create', [
            'errors' => $form->getErrors(),
            'book' => $form->getData(),
        ]);
    }

    public function detail($id)
    {
        // Get data manager
        $dbm = $this->databaseManager;

        // Find the current book
        $book = $dbm->findOne($id);

        return $this->render('pages/book/read', [
            'book' => $book,
        ]);
    }

    public function update($id)
    {
        // Get data manager
        $dbm = $this->databaseManager;

        // Find the current book
        $book = $dbm->findOne($id);

        // Crete the book form
        // -> based on BookForm class
        // -> with the current book data
        $form = $this->form(
            BookForm::class,
            $book
        );

        // Form submission & validation
        if ($form->submitted() && $form->isValid())
        {
            if ($id = $dbm->save($form->getData(), $book->id))
            {
                $this->redirectTo('book:read', [
                    'id' => $id,
                ]);
            }
        }

        return $this->render('pages/book/update', [
            'errors' => $form->getErrors(),
            // 'book' => $book,
            'book' => $form->getData(),
        ]);
    }

    public function delete($id)
    {
        // Get data manager
        $dbm = $this->databaseManager;

        // Get the current book
        $book = $dbm->findOne($id);

        // Check the request method
        if ($this->request->getMethod() === Request::METHOD_DELETE)
        {
            // Proceed to deletion
            // If deletion is a success, redirect the user to the Book Index
            if ($dbm->remove($id));
            {
                // Redirection
                return $this->redirectTo('book:index');
            }
        }

        return $this->render('pages/book/delete', [
            'book' => $book
        ]);
    }
}