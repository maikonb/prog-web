<?php
    // Diferentes namespaces em um mesmo arquivo
    // Utilize { } para definir o escopo de cada namespace

    namespace NameSpaceX {
        class ClasseTeste {
            public function quemSouEu() {
                echo "<h1> Sou a ClasseTeste do NameSpaceX </h1>\n";
            }
        }
    }

    namespace NameSpaceY {
        class ClasseTeste {
            public function quemSouEu() {
                echo "<h1> Sou a ClasseTeste do NameSpaceY </h1>\n";
            }
        }
    }

    // Namespace Global
    namespace {
        use NameSpaceY\ClasseTeste;
        $c = new ClasseTeste();
        $c->quemSouEu();
    }


    ////////////////////////////////////////////////////


    // Você também pode definir diferentes hierarquias
    namespace Classes\NameSpaceX {
        class ClasseTeste {
            public function quemSouEu() {
                echo "<h1> Sou a ClasseTeste do NameSpaceX </h1>\n";
                echo __NAMESPACE__;
                echo "<br>\n";
            }
        }
    }

    namespace Classes\NameSpaceY {
        class ClasseTeste {
            public function quemSouEu() {
                echo "<h1> Sou a ClasseTeste do NameSpaceY </h1>\n";
                echo __NAMESPACE__;
                echo "<br>\n";
            }
        }
    }

    // Namespace Global
    namespace {
        use Classes\NameSpaceX\ClasseTeste;
        $c = new ClasseTeste();
        $c->quemSouEu();
    }


?>
