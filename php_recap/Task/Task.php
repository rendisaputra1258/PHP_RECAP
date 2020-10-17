<!-- <?php
class Task{
    protected $description;
    protected $complete =false;
    public function __construct($description)
    {
        $this->description= $description;
    }
    public function complete()
    {
      $this->complete=true;
    }
    public function isComplete()
    {
        return $this->complete;
    }
    public function description()
    {
        return $this->description;
    }

}
$tasks =[
   new Task( 'go to the market'),
   new Task( 'go to the store'),
   new Task( 'go to the barbershop')
];
$tasks[1]->complete();



