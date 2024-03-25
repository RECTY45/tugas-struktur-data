<?php

class Stack 
{
    private $data = array();
    private $top = 0;

    public function push($data)
    {
        $this->data[$this->top++] =  $data;
    }

    public function peek()
    {
        return end($this->data);
    }

    public function IsEmpty()
    {
        return empty($this->data);
    }

    public function pop()
    {
        return array_pop($this->data);
    }
}

class Queue
{
    private $data = array();

    public function enqueue($data)
    {
        $this->data[] = $data;
    }

    public function dequeue()
    {
        return array_shift($this->data);
    }

    public function isEmpty()
    {
        return empty($this->data);
    }

    public function pop(){
        return array_pop($this->data);
    }
}

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    private $head;

    public function insert($data)
    {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    public function display()
    {
        $null = "Gak ada bwang..";
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }
        echo($null);
    }
}

echo('=============== Ini  Adalah Struktur Data Queue ===========');

echo "<br><br>";

// Queue
$queue = new Queue();
$queue->enqueue("Fery Fadul Rahman");
$queue->enqueue("Bintang");
$queue->enqueue("Zhaka");

echo $queue->dequeue(); // Output/Keluaran : Fery karena ini bersifat antrian(Queue) yang pertama masuk pertama keluar

echo "<br><br>";

echo ('==================================================');
echo "<br><br>";

echo('============= Ini  Adalah Struktur Data LinkedList ===========');

echo "<br><br>";
// Linked List  
$linkedList = new LinkedList();
$linkedList->insert("Apel");
$linkedList->insert("Strauberi");
$linkedList->insert("Anggru");
$linkedList->insert("Alpukat");

echo "<br><br>";

$linkedList->display(); // Output/Keluaran: Apel ->  Strauberi -> Anggru -> Null ini karena Linked list bersifat Struktur Data linear dimana data di akses berdasarkan
                        //  Nodenya

echo "<br><br>";
echo ('===================================================');   
echo "<br><br>";

echo ('=========== Ini Adalah Struktur Data Stack ==========='); 

echo "<br><br>";
$stack  =  new Stack(); // Output/Keluaran: Zhaka yang tampil karena data yang kita hapus adalah data terakhir masuk 2 jadi yang  di tampilkan data terakhir yang muncul
                        // yaitu Zhaka.

$stack->push("Fery");
$stack->push("Bintang");
$stack->push("Zhaka");
$stack->push("Faiz");
$stack->push("Andika");

$stack->pop();
$stack->pop();

var_dump($stack->IsEmpty());

echo ('<br><br>' . $stack->peek());

echo "<br><br>";

echo ('===================================================');
