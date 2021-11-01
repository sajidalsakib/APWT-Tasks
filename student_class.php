<?php
    class Student{
        public $name;
        public $id;
        public $courses=[];
        
        function showinfo(){
            echo "Name : $name";
            echo "Id : $id";
        }
        function addCourse ($courseName){
            $this->courses[] = $courseName;
        }
        function showCourses()
        {
            echo "Name : $this->name<br>";
            echo "Id : $this->id<br><br>";
            foreach($this->courses as $c){
                echo "$c <br>";
            }
        }
    }
    $s1 = new Student();
    $s1->name = "SAJID";
    $s1->id = "18-38085-2";
    $s1->addCourse("Computer Network");
    $s1->addCourse("Web Technology");
    $s1->addCourse("Software Quality Testing");
    $s1->addCourse("Advance Web Technology");

    $s1->showCourses();

?>