# Visitor pattern over tree

This project shows how to implement a simple visitor over a simple tree
using php language. 

## Prerequirements

[```php 7.1```](http://php.net/downloads.php)

[```composer```](https://getcomposer.org/)

To run this project you need to generate autoload file by executing
```
composer install
```

## Running

You can run the sample by executing
```
php run.php
```

It should print to stdout
```
root => test
```

## Inner structure

`./composer.json` - this file contains project description, autoload
and requirements.

---

`./run.php` - this file loads all required classes and executes
the script located in the `akorezin\Main::exec()` function.

---

`./src/Main.php` - this file contains implemention of `akorezin\Main`
class.

Methods:
- `akorezin\Main::init()` - inits class with some default values.
- `akorezin\Main::exec()` - executes script. In this sample it creates
a tree, root node and a visitor. Then it uses a visitor to walkthrow
the nodes of the tree.

---

`./src/Visitor.php` - this file contains implementation of
`akorezin\Visitor` class.

Methods:
- `akorezin\Visitor::visit()` - prints name and value of the node.

---

`./src/Tree.php` - this file contains implementation of
`akorezin\Tree` class. This is a very simple implementation of tree
data stucture. For example it lacks of traversation.

Properties:
- `akorezin\Tree::rootNode` - holds root node of the tree.

Methods:
- `akorezin\Tree::setRootNode()` - sets root node of the tree.
- `akorezin\Tree::getRootNode()` - gets root node of the tree. 
- `akorezin\Tree::accept()` - accepts the `akorezin\Visitor` and
passes it to the root node.

---

`./src/Node.php` - this file contains implementation of `akorezin\Node`
class.

Properties:
- `akorezin\Node::nodeName` - name of the node.
- `akorezin\Node::nodeValue` - value of the node.
- `akorezin\Node::children` - node children.

Methods:
- `akorezin\Node::setNodeName()` - sets name of the node.
- `akorezin\Node::getNodeName()` - gets name of the node.
- `akorezin\Node::setNodeValue()` - sets node value.
- `akorezin\Node::getNodeValue()` - gets node value.
- `akorezin\Node::setChildren()` - sets node children.
- `akorezin\Node::getChildren()` - gets node children.
- `akorezin\Node::addChild()` - adds child to the node.
- `akorezin\Node::accept()` - accepts `akorezin\Visitor`, executes
`akorezin\Visitor::visit()` for current node and passes it to children
of the current node.
