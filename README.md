The Troll Inception - Objective Reality Php Solution
====================================================

Welcome to The Troll Inception (TTI) project, it is not a framework, but a solution behind a framework.

The Troll Inception is an objective reality php "solution", based over the CSS (Code Similar Situations) principle, and a personal notion of object, all thought by Edouard Kombo.
Because you don't have to learn a framework, but only good development practices, TTI is not a framework, but a concentration of good practices made extremely intuitive!

The initiative behind TTI was to rethink the notion of object.
We believe a true object is only an interface, implemented by an abstracted shape you can concretely use. That's all!
That means, a concrete class that doesn't have a contract with an abstract class and an interface, can't be considered as real object, but rather as a trait, or "lost son", or anything else, but not as object.

Based from this, we developed two powerfull collection of generic classes that respect this notion, and, can be used in any of your projects, to fully respect SOLID and GRASP principles.

"InterfaceFactory" and "AbstractFactory" collection of classes, are the heart of The Troll Inception solution.
AbstractFactory is a collection of abstracted classes that have very single responsibilities implemented by specifics and generic interfaces grouped in the InterfaceFactory.

Together, they offer powerfull possibilities and constraints for better closed development practices in your applications development.

Coupled with the CSS principle and the Objective Reality, TTI offers you a new generation of framework that involve agile development.


1) What is Objective Reality design pattern?
--------------------------------------------

Objective Reality is the fact of coding real and funny situations, in an objective and professional goal.
It is a design pattern thought by Edouard Kombo, and an implementation of CSS principle, also thought by Edouard Kombo.

With Objective Reality design pattern, you begin playing with fun rules. You play to win somthing, earn a reward.
This reward can litteraly improve agile development by estimating more easily the technical debt, your project will create.


2) What is CSS Principle?
-------------------------

It is extremely important not to confuse the CSS (Cascading Style Sheet) language, with CSS (Code Similar Situation) principle.

WHY DO CSS PRINCIPLE USEFUL?
Because it is hard in very short development process to understand how to apply all necessary design pattern principles.
Because it is hard to fully capture in seconds, a complex code of someone else, or even of ourself, some weeks or months later.
Because too much complex code doesn't connect you with your passion, and makes you code bad.
Because it is hard for beginners and more experienced developers to intuitively appropriate themselves an architecture.
Because it is funnier to code something you can play with, and that will be easier for others, to intuitively understand and play with.

WHAT DO CSS PRINCIPLE RECOMMEND?
URA (Understand, retain, apply) something by inspiring it from a similar situation we've already seen or lived in real life (story telling, concrete experience, game...).

HOW DO CSS PRINCIPLE SOLVE THOSE PROBLEMS?
Instead of simply coding instructions and objects, you play with them, then you emotionnaly connect with your application and your job gets funnier, more pleasant, and is intuitively accessible by other developpers.


3) The Troll Inception STORY (CSS and Objective Reality implementation)
-----------------------------------------------------------------------

You play Roar, a troll cave, lost in the Breeze forest by his stupidity. To survive, he has to conquer and dominate this forest.
Roar has several tools at its disposal, like a torch, a map, an eagle that will guide him to the best routes he can teleport to, via the magical portal, an ancestral passort...
The goal is to reach all routes and respond, to affirm your territory.
When Roar responds, he may beat the asian forest spirit, "Foucking Law".
Foucking Law has one powerful wild beast, CodeCeption, which will test Roar as many possible times, like a ghost.
Everytime Roar responds successfully to Foucking Law, he wins 5 Chicken points.

These points will help you estimate more precisely the technical debt a project will introduce.

How do this concretely apply?
You start to play with objective reality in the heart of your application, ONLY by naming variables as living objects of the story telling.
This way, all the application you are designing, prints easily in your subconscious mind.
You are playing with it, and it is easier for other developers to play with it too.


4) ILN file extension
---------------------

ILN is the acronym of "Intuitive Language Notation" and, is a language used for object configuration.
It is similar as YAML but less advanced.

More explanation about the language principles soon.


5) Installing the Troll Inception
---------------------------------

When it comes to installing the Troll Inception, you have the following options.

### Use Composer (*recommended*)

As The Troll Inception uses [Composer][2] to manage its dependencies, the recommended way
to create a new project is to use it.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to generate a new TTI application:

    php composer.phar create-project edouardkombo/the-troll-inception path/to/install

Composer will install TTI and all its dependencies under the `path/to/install` directory.

### Download an Archive File

To quickly test TTI, you can also download an [archive][3] and unpack it somewhere under your web server root directory.

The archive comes without vendors. To download them, first download composer (see above) and run the following command:

    php composer.phar install


6) Browsing the Demo Application
--------------------------------

Congratulations! You're now ready to use The Troll Inception.

To see a real-live TTI page in action, access the following page:

    http://localhost

7) Getting started with TTI
-------------------------------

This distribution is meant to be the starting point for your TTI
applications, but it also contains some sample code that you can learn from
and play with.

We will provide soon a nice and complete documentation.
But you can already play with it and reads the api.

To access to the api, simply go to:

    http://localhost/sandbox 

What's inside?
---------------

The Troll Inception is configured with the following defaults:

  * Aura Router;

  * Interface Factory;

  * Abstract factory;

  * Parser Strategy for ILN (Intuitive Language Notation) files.

  * Http Strategy;

  * Dependency Strategy;

  * Event Strategy;

  * Cache and Db Utils;


The Troll Inception also includes some useful dependencies to help you code better:

  * CodeCeption as unit testing framework;

  * PhpMd;

  * Php-CodeSniffer;

  * Php-loc;



All libraries and bundles included in the Troll Inception are
released under the MIT or BSD license.

Enjoy!
