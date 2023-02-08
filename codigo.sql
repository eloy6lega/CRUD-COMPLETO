CREATE TABLE IF NOT EXISTS public.productos
(
    id serial NOT NULL,
    nombre character varying(50) NOT NULL,
    unidades smallint NOT NULL,
    CONSTRAINT productos_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.productos
    OWNER to postgres;
	
INSERT INTO public.productos (nombre,unidades) VALUES ('camisa',15);
SELECT * FROM public.productos;

--------------------------------------------------------------------------------------------
CREATE OR REPLACE PROCEDURE public.sp_add_productos(IN nombre text, IN unidades numeric)
	BEGIN ATOMIC
		INSERT INTO public.productos (nombre,unidades) VALUES (nombre,unidades);
	END;

CALL public.sp_add_productos('sombrero',9)
SELECT * FROM public.productos;
--------------------------------------------------------------------------------------------
CREATE OR REPLACE PROCEDURE public.sp_update_productos(_id integer, IN _nombre text, IN _unidades numeric)
	BEGIN ATOMIC
		UPDATE public.productos SET nombre=_nombre, unidades=_unidades WHERE id = _id;
	END;
CALL public.sp_update_productos(2,'UpEst',30)
SELECT * FROM public.productos;
--------------------------------------------------------------------------------------------
CREATE OR REPLACE PROCEDURE public.sp_delete_productos(_id integer)
	BEGIN ATOMIC
		DELETE FROM public.productos WHERE id = _id;
	END;
CALL public.sp_delete_productos(11);
SELECT * FROM public.productos;




