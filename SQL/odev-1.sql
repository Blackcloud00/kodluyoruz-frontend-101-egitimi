--1 SELECT title, description FROM public.film 
--2 SELECT * FROM public.film WHERE length > 60 AND length < 75
--3 SELECT * FROM public.film WHERE rental_rate = 0.99 AND replacement_cost = 12.99 OR replacement_cost = 28.99
--4 SELECT last_name FROM public.customer WHERE first_name = 'Mary'
 SELECT * FROM public.film WHERE NOT length > 50 AND rental_rate = 2.99 OR rental_rate = 4.99
ORDER BY film_id ASC 