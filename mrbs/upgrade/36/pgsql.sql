-- $Id: pgsql.sql 2803 2014-01-17 14:25:01Z cimorrison $

-- Add a modified_by column so that we can see who last edited a booking

ALTER TABLE %DB_TBL_PREFIX%entry
ADD COLUMN modified_by varchar(80) DEFAULT '' NOT NULL;

ALTER TABLE %DB_TBL_PREFIX%repeat
ADD COLUMN modified_by varchar(80) DEFAULT '' NOT NULL;
