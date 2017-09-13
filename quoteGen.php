<?php
    function quoteGen()
    {
        //Declare an array of all the possible quotes
        $quotes = [
            0 => 'You miss 100% of the shots you don’t take. – Wayne Gretzky',
            1 => 'Winning isn’t everything, but wanting to win is. – Vince Lombardi',
            2 => 'We become what we think about. – Earl Nightingale',
            3 => 'There are no traffic jams along the extra mile. – Roger Staubach',
            4 => 'It is never too late to be what you might have been. – George Eliot',
            5 => 'I would rather die of passion than of boredom. – Vincent van Gogh',
            6 => 'Dreaming, after all, is a form of planning. – Gloria Steinem',
            7 => 'Either write something worth reading or do something worth writing. – Benjamin Franklin',
            8 => 'Education costs money.  But then so does ignorance. – Sir Claus Moser',
            9 => 'Nothing is impossible, the word itself says, “I’m possible!” – Audrey Hepburn',
            10 => 'He who has a why to live can bear almost any how. – Friedrich Nietzsche',
            11 => 'He that respects himself is safe from others. – Henry Wadsworth Longfellow',
            12 => 'Common sense is genius dressed in its working clothes. – Ralph Waldo Emerson',
            13 => 'In three words I can sum up everything I’ve learned about life: it goes on. – Robert Frost',
            14 => 'Don’t take life too seriously. You’ll never get out of it alive. – Elbert Hubbard',
            15 => 'Nothing that you have not given away will ever be really yours. – C. S. Lewis',
            16 => 'Life is what happens to you while you’re busy making other plans. – Allen Saunders',
            17 => 'Good sense, disciplined by experience and inspired by goodness, issues in practical wisdom. – Samuel Smiles ',
            18 => 'One of the greatest pieces of economic wisdom is to know what you do not know. – John Kenneth Gilbraith'
        ];
        //Print an element of the quotes array randomly
        echo $quotes[rand(0,18)];
    }
