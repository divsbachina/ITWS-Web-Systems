

Part 3:

In Part 3 of the insertion of the SQL, there needs to be an insert at every part of the data that is 
going to be inserted. The modified code should be as follows:

INSERT INTO `items` (`id`, `name`, `price`) VALUES (1, 'MacBook Pro', '2499'); 
INSERT INTO `items` (`id`, `name`, `price`) VALUES (2, 'OpenBSD Tshirt', '20.0'); <-- added a closed quote, changed things to a semi colon
INSERT INTO `items` (`id`, `name`, `price`) VALUES (3, 'Amazon echo', '99.99');
INSERT INTO `items` (`id`, `name`, `price`) VALUES (4, 'Nvidia GTX 3080', '1999.99'),
INSERT INTO `items` (`id`, `name`, `price`) VALUES (5, 'AMD Ryzen 9 3900X’, '549.99'); <- weird character, has to be a quotation
INSERT INTO `discounts` (`id`, `item_id`, `discount`) VALUES (1, 1, 0.25); 
INSERT INTO `discounts` (`id`, `item_id`, `discount`) VALUES (2, 2, 0.5);
INSERT INTO `discounts` (`id`, `item_id`, `discount`) VALUES (3, 3, 0.75);
INSERT INTO `discounts` (`id`, `item_id`, `discount`) VALUES (4, 5, 0.1);

The insertion into and the values need to be explicitly specified with all of the data.


ALTER TABLE discounts
    ADD CONSTRAINT foreign_key_id
    FOREIGN KEY (id)
    REFERENCES items(id);

//for some reason I forgot to put the foreign key constraint earlier, so I tried to insert
this code above and it kept breaking.

Because I need the foreign key to work in order for it not to break and so that I can join the tables, I instead did a join within the php query where I set the item ids equal to each others so that it may blend together.

In addition, I thought it may be easier for the user to be able to add additional item values and discounts into the table so I created an additional items.html, items.php. I had intended to also create a discounts.html and a discounts.php but unfortunately I had run out of time.