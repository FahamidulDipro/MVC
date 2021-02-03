<?php
    include "./book.php";
    class Model{
        public function getBookDetails(){
          array(
             "xyz"=> new Book('xyz Book','Kamran Hafiz','History Book'),
             "Jungle Book"=> new Book('Jungle Book','R.Kipling','Classic Book')
        );
        }
        public function getBook($title){
            $allBooks = $this->getBookDetails();
            return $allBooks[$title];
        }
    }
?>