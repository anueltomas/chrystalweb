-- Database generated with pgModeler (PostgreSQL Database Modeler).
-- pgModeler  version: 0.9.1
-- PostgreSQL version: 10.0
-- Project Site: pgmodeler.io
-- Model Author: ---


-- Database creation must be done outside a multicommand file.
-- These commands were put in this file only as a convenience.
-- -- object: new_database | type: DATABASE --
-- -- DROP DATABASE IF EXISTS new_database;
-- CREATE DATABASE new_database;
-- -- ddl-end --
-- 

-- object: public.supervisors | type: TABLE --
-- DROP TABLE IF EXISTS public.supervisors CASCADE;
CREATE TABLE public.supervisors(
	id serial NOT NULL,
	name character varying(80) NOT NULL,
	nickname character varying(80) NOT NULL,
	created timestamp,
	modified timestamp,
	status bool NOT NULL DEFAULT true,
	CONSTRAINT supervisors_pk PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.supervisors OWNER TO postgres;
-- ddl-end --

-- object: public.actions | type: TABLE --
-- DROP TABLE IF EXISTS public.actions CASCADE;
CREATE TABLE public.actions(
	id serial NOT NULL,
	name character varying(80) NOT NULL,
	nickname character varying(80) NOT NULL,
	created timestamp,
	modified timestamp,
	status bool NOT NULL DEFAULT true,
	CONSTRAINT actions_pk PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.actions OWNER TO postgres;
-- ddl-end --

-- object: public.permissions | type: TABLE --
-- DROP TABLE IF EXISTS public.permissions CASCADE;
CREATE TABLE public.permissions(
	id serial NOT NULL,
	allowed bool,
	supervisor_id integer,
	action_id integer,
	rol_id integer,
	CONSTRAINT permissions_pk PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.permissions OWNER TO postgres;
-- ddl-end --

-- object: public.rols | type: TABLE --
-- DROP TABLE IF EXISTS public.rols CASCADE;
CREATE TABLE public.rols(
	id serial NOT NULL,
	name character varying(80) NOT NULL,
	created timestamp,
	modified timestamp,
	status bool DEFAULT true,
	CONSTRAINT rols_pk PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.rols OWNER TO postgres;
-- ddl-end --

-- object: public.subactions | type: TABLE --
-- DROP TABLE IF EXISTS public.subactions CASCADE;
CREATE TABLE public.subactions(
	id serial NOT NULL,
	name character varying(80) NOT NULL,
	created timestamp,
	modified timestamp,
	action_id integer,
	CONSTRAINT subactions_pk PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.subactions OWNER TO postgres;
-- ddl-end --

-- object: public.users | type: TABLE --
-- DROP TABLE IF EXISTS public.users CASCADE;
CREATE TABLE public.users(
	id serial NOT NULL,
	name character varying(150) NOT NULL,
	username character varying(100) NOT NULL,
	password character varying(255) NOT NULL,
	created timestamp,
	modified timestamp,
	CONSTRAINT users_pk PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.users OWNER TO postgres;
-- ddl-end --

-- object: public.rols_users | type: TABLE --
-- DROP TABLE IF EXISTS public.rols_users CASCADE;
CREATE TABLE public.rols_users(
	id serial NOT NULL,
	rol_id integer,
	user_id integer,
	CONSTRAINT rols_users_pk PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.rols_users OWNER TO postgres;
-- ddl-end --

-- object: public.companys | type: TABLE --
-- DROP TABLE IF EXISTS public.companys CASCADE;
CREATE TABLE public.companys(
	id serial NOT NULL,
	rif character varying(50) NOT NULL,
	name character varying(150) NOT NULL,
	addresses character varying(150) NOT NULL,
	phone_1 character varying(15),
	phone_2 character varying(15),
	email character varying(80),
	created timestamp,
	modified timestamp,
	status bool NOT NULL DEFAULT true,
	CONSTRAINT unique_rif UNIQUE (rif),
	CONSTRAINT unique_name UNIQUE (name),
	CONSTRAINT companys_pk PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.companys OWNER TO postgres;
-- ddl-end --

-- object: public.companys_users | type: TABLE --
-- DROP TABLE IF EXISTS public.companys_users CASCADE;
CREATE TABLE public.companys_users(
	id serial NOT NULL,
	user_id integer,
	company_id integer,
	CONSTRAINT companys_users_pk PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.companys_users OWNER TO postgres;
-- ddl-end --

-- object: fk_id_supervisor | type: CONSTRAINT --
-- ALTER TABLE public.permissions DROP CONSTRAINT IF EXISTS fk_id_supervisor CASCADE;
ALTER TABLE public.permissions ADD CONSTRAINT fk_id_supervisor FOREIGN KEY (supervisor_id)
REFERENCES public.supervisors (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION;
-- ddl-end --

-- object: fk_id_action | type: CONSTRAINT --
-- ALTER TABLE public.permissions DROP CONSTRAINT IF EXISTS fk_id_action CASCADE;
ALTER TABLE public.permissions ADD CONSTRAINT fk_id_action FOREIGN KEY (action_id)
REFERENCES public.actions (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION;
-- ddl-end --

-- object: fk_id_rol | type: CONSTRAINT --
-- ALTER TABLE public.permissions DROP CONSTRAINT IF EXISTS fk_id_rol CASCADE;
ALTER TABLE public.permissions ADD CONSTRAINT fk_id_rol FOREIGN KEY (rol_id)
REFERENCES public.rols (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION;
-- ddl-end --

-- object: fk_id_action | type: CONSTRAINT --
-- ALTER TABLE public.subactions DROP CONSTRAINT IF EXISTS fk_id_action CASCADE;
ALTER TABLE public.subactions ADD CONSTRAINT fk_id_action FOREIGN KEY (action_id)
REFERENCES public.actions (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION;
-- ddl-end --

-- object: fk_id_rol | type: CONSTRAINT --
-- ALTER TABLE public.rols_users DROP CONSTRAINT IF EXISTS fk_id_rol CASCADE;
ALTER TABLE public.rols_users ADD CONSTRAINT fk_id_rol FOREIGN KEY (rol_id)
REFERENCES public.rols (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION;
-- ddl-end --

-- object: fk_id_user | type: CONSTRAINT --
-- ALTER TABLE public.rols_users DROP CONSTRAINT IF EXISTS fk_id_user CASCADE;
ALTER TABLE public.rols_users ADD CONSTRAINT fk_id_user FOREIGN KEY (user_id)
REFERENCES public.users (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION;
-- ddl-end --

-- object: fk_id_company | type: CONSTRAINT --
-- ALTER TABLE public.companys_users DROP CONSTRAINT IF EXISTS fk_id_company CASCADE;
ALTER TABLE public.companys_users ADD CONSTRAINT fk_id_company FOREIGN KEY (company_id)
REFERENCES public.companys (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION;
-- ddl-end --

-- object: fk_id_user | type: CONSTRAINT --
-- ALTER TABLE public.companys_users DROP CONSTRAINT IF EXISTS fk_id_user CASCADE;
ALTER TABLE public.companys_users ADD CONSTRAINT fk_id_user FOREIGN KEY (user_id)
REFERENCES public.users (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION;
-- ddl-end --


