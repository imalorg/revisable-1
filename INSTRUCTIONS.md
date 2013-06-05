# Instructions
## On site intervention

Visitors present in the exhibition space can act on the installation by following the protocol:

1. Fill the form below describing your identity and your intervention on the piece
2. Give back the form to a member of iMAL
3. Wait for a notification by email about the validation or refusal of your intervention (technical impossibility or complete calendar)
4. Your intervention is exposed during a week at iMAL and archived online on this website.

## Online intervention

This kind of intervention requires the knowledge of the distributed revision control system Git.
It is possible for online visitors to clone the Git repository of "Révisable 1" and submit  a pull request. The repository URL is: [https://github.com/imalorg/revisable-1/](https://github.com/imalorg/revisable-1/)  
The file to edit is named "PIECE" and located at the root of the repository.

## Advanced Intervention

A special format is used to describe the strokes strings can trace in a grid space.

A grid is composed by points that can be connected by strings. Each point of a grid can hold extremities of strings, part of strings, or nothing.

- Grid points are always named using numbers from top to bottom and left to right, such as occidental writing
- Order of the connection does not have any importance in the code, the same composition can be coded in two different ways

#### Code format

    C2/4:7:2:3:9:5:10/07-20-13
     a         b         c

a: Choice of the string.
b: Declaration of the path of the rigging
c: Date of the intervention based on the format: mm-dd-yy

#### Demo

    C1/6:9:28/15:14:27/07-20-13

![Demo](https://raw.github.com/raphaelbastide/1962/master/media/extra/doc-media/demo-revisable-1.png)


#### Advanced compositions

Several strings can be used in the same composition consequently, each path must be declared after a [string choice](#string-choice) `C2/2:4:7`.

Strings can criss-cross from the front and the bottom. A crossing should be declared unsing parenthesis and the signs `<` and `>` will specify id the crissing occur respectively from front to behind or from behind to front.

    C2/1:8:10:(>1:8)11/C1/5:9/07-20-13
     a    b     c      d   e     f

a: Choice of the first string  
b: First string path  
c: The segment 10:11 of the first string cross the segment 1:5 from behind to front  
d: Choice of the second string  
e: Second string path  
f: Date of the intervention

The code above will produce the following composition:

![revisable grid](../media/extra/doc-media/revisable-grid-advanced.png)

#### String choice

- C1: Black elastic - [image](https://raw.github.com/raphaelbastide/1962/master/media/extra/doc-media/black-elastic.png)
- C2: 1.5m Red plait rope with golden hooks - [image](https://raw.github.com/raphaelbastide/1962/master/media/extra/doc-media/red-rope.jpg)

#### Alternative writing

In order to facilitate the versionning, the code format can be writen with one statement per line.

    C2/1:8:10:(>1:8)11/C1/5:9/07-20-13

is equal to:

    C2
    1
    8
    10
        >1:8
    11
    
    C1
    5
    9
    07/20/13
 