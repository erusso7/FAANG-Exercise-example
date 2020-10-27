# Software Engineer interview exercise (FAANG)

#### _Given a list of integers and considering them as the heights of a graph of bars, calculate how much 'water' can fit in._

To understand the question, let's use an image, it will be clearer

Given the input `[6, 0, 4, 1, 3]`, the result should be `6` units of water 

![input 6 0 4 1 3](_images/input.JPG "Graph representing the input [6 0 4 1 3]")

### Some test cases:

![same height fist and last](_images/1.JPG "same height fist and last")

![same height fist and last](_images/2.JPG "same height fist and last")

![same height fist and last](_images/3.JPG "same height fist and last")

![same height fist and last](_images/4.JPG "same height fist and last")

![same height fist and last](_images/5.JPG "same height fist and last")

![same height fist and last](_images/6.JPG "same height fist and last")

![same height fist and last](_images/7.JPG "same height fist and last")

### Answer

You can find 2 implementation: the easiest and the fastest.

The first one is the easiest but expensive because time complexity is <b>O(n) = n<sup>2</sup></b>
Note that the space complexity is 2.N, but this could be easily reduce to N using the same array from the input instead of 2 sub-arrays.

Checkout the `answer` branch if you want to see this implementation.
```
git checkout answer
```

The second one (provided by @joanlopez) is faster because it uses 2 auxiliary arrays to store the maximum values for each position, son the space complexity is 3.N => N.
However, as it's iterating 3 times over the input array, the time complexity is reduce to 3.N => <b>O(n) = n</b>

Checkout the `answer-2` branch if you want to see this implementation.
```
git checkout answer-2
```
