CREATE DATABASE SHOPPINGONLINE;
USE SHOPPINGONLINE;
CREATE TABLE category (
  cateId int primary key,
  cateName varchar(50),
  isShow int,
  createDate date,
  modifyDate date,
)

CREATE TABLE customer (
  customerId int,
  firstname varchar(30) ,
  lastname varchar(30) ,
  email varchar(50) ,
  reg_date timestamp,
  PRIMARY KEY (customerId)
) 

CREATE TABLE order_ (
  orderId int ,
  customerId int DEFAULT NULL,
  orderDate date DEFAULT NULL,
  orderCostTotal int,
  PRIMARY KEY (orderId)
)

CREATE TABLE order_detail (
  orderId int,
  proId int NOT NULL,
  number int DEFAULT NULL,
  orderDetailCost int DEFAULT NULL,
  PRIMARY KEY (orderId,proId)
) 

CREATE TABLE product (
  proId int ,
  proCateID int NOT NULL,
  proImage varchar(50) DEFAULT NULL,
  proName varchar(30),
  proDesc varchar(500) DEFAULT NULL,
  proContent text,
  proMadeIn varchar(50) DEFAULT NULL,
  proCost int DEFAULT NULL,
  number int DEFAULT NULL,
  isShow int DEFAULT NULL,
  createDate date DEFAULT NULL,
  modifyDate date DEFAULT NULL,
  proOrdered int DEFAULT NULL,
  PRIMARY KEY (proId)
) 

CREATE TABLE user_ (
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  PRIMARY KEY (username)
) 