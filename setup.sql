CREATE ROLE "schema-test" LOGIN PASSWORD 'password' VALID UNTIL 'infinity';
CREATE DATABASE "schema-test" WITH ENCODING='UTF8' OWNER="schema-test" CONNECTION LIMIT=-1;

/**
 * Generated SQL
 * vendor/bin/doctrine orm:schema-tool:update --dump-sql
 */
CREATE TABLE bar (id VARCHAR(255) NOT NULL, foo_id VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id));
CREATE INDEX IDX_76FF8CAA8E48560F ON bar (foo_id);
CREATE TABLE foo (id VARCHAR(255) NOT NULL, baz VARCHAR(255) NOT NULL, PRIMARY KEY(id));
CREATE INDEX IDX_CUSTOM_NAME ON foo (baz);
ALTER TABLE bar ADD CONSTRAINT FK_76FF8CAA8E48560F FOREIGN KEY (foo_id) REFERENCES foo (id) NOT DEFERRABLE INITIALLY IMMEDIATE;

/**
 * If you create the ManyToOne Index with a custom name instea
 */
CREATE INDEX IDX_MANY_TO_ONE ON bar (foo_id);

/**
 *vendor/bin/doctrine orm:schema-tool:update --dump-sql
 */
ALTER INDEX idx_many_to_one RENAME TO IDX_76FF8CAA8E48560F;
