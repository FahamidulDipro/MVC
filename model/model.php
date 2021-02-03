<?php
    include "./model/book.php";
    class Model{
        public function getBookDetails(){
        return array(
             "xyz"=> new Book('xyz','Kamran Hafiz','History Book'),
             "Jungle Book"=> new Book('Jungle Book','R.Kipling','Classic Book')
        );
        }
        public function getBook($title){
            $allBooks = $this->getBookDetails();
            return $allBooks[$title];
        }
    }
?>