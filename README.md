# php-observer-example

## What is the Observer Pattern

> "The observer pattern is a software design pattern in which an object, called the subject, 
> maintains a list of its dependents, called observers, and notifies them automatically of 
> any state changes, usually by calling one of their methods. It is mainly used to implement 
> distributed event handling systems." [Wikipedia:Observer_pattern](https://en.wikipedia.org/wiki/Observer_pattern) 

## What is included in this Repo

1. The core PHP Classes [`Observer.php`](Observer.php) and [`Observable.php`](Observable.php)
2. An (Fuel Tank Dashboard) Example to get an idea of how it works

> If the Fuel Level is at 5% or lower the Fuel Gauge LED is on otherwise off.
>
> If you try to put more than 100% into the Fuel Tank it will throw an Exception

## How does it work together

### The [`Observer.php`](Observer.php) interface

An interface is a description of the actions that an object can do.

Every Observer must handle at a **minimum** the change of **one** value. 
Otherwise the Observer would have nothing to observe. That's obvious, isn't it?

In [`Observer.php`](Observer.php#L8) we declare only one `public function newValue($value)` with an empty body.

The [`FuelTankWarning.php`](FuelTankWarning.php#L17) and [`FuelDisplay.php`](FuelDisplay.php#L8) are implementing the [`Observer`](Observer.php) interface. 
Have a look at the individual declarations of `function newValue($value){ ... }`.

### The abstract class [`Observable.php`](Observable.php)

>"An abstract class is a class that is declared abstract [...]. 
>Abstract classes cannot be instantiated, but they can be subclassed." [Oracle:Abstract Methods and Classes](https://docs.oracle.com/javase/tutorial/java/IandI/abstract.html)

The [`FuelSensor.php`](FuelSensor.php#L2) extends the abstract class [`Observable.php`](Observable.php). 
By this meaning it can make use of all functions of [`Observable.php`](Observable.php) and can change them and add more functions if required. 
In the example I've added a function called [`setFuelLevel`](FuelSensor.php#L10) to set the Fuel Level. It uses the [`notifyObserver`](FuelSensor.php#L12) function 
from [`Observable`](Observable.php#L28) to notify the Observers.

## Example

```bash
user@machine:/dir/# php5 Example.php 
LED: off
Your tank is filled to 80%

LED: off
Your tank is filled to 10%

LED: on
Your tank is filled to 5%

LED: on
Your tank is filled to 1%

LED: off
Your tank is filled to 100%


```

## License 
public domain

*Free to use for everyone who wants to :)*