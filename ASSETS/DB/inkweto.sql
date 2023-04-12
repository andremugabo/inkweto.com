CREATE table gender(
	g_id int AUTO_INCREMENT PRIMARY KEY,
    g_name 	enum('MALE','FEMALE')
);
CREATE table users(
    u_id int AUTO_INCREMENT PRIMARY KEY,
    u_reg varchar(80) NOT NULL,
    u_fname varchar(50) NOT NULL,
    u_lname varchar(50) NOT NULL,
    g_id int,
    u_phone varchar(15) NOT NULL,
    u_password VARCHAR(15) NOT NULL,
    u_role ENUM('ADMIN','SELLER','CUSTOMER'),
    u_date datetime DEFAULT current_timestamp(),
    u_status ENUM('1','0') DEFAULT '1',
    FOREIGN KEY (g_id) REFERENCES gender(g_id)
);
CREATE table category(
    c_id int AUTO_INCREMENT PRIMARY KEY,
    c_name varchar(15) NOT NULL,
    c_status ENUM('1','0') DEFAULT '1' 
);
CREATE table attribute(
    a_id int AUTO_INCREMENT PRIMARY KEY,
    a_name VARCHAR(15) NOT NULL,
    a_description VARCHAR(80)
);
CREATE table attribute_value(
    av_id int AUTO_INCREMENT PRIMARY KEY,
    av_name VARCHAR(15),
    av_value VARCHAR(20),
    a_id int,
    FOREIGN KEY (a_id) REFERENCES attribute(a_id)
);
CREATE table shop(
	s_id int AUTO_INCREMENT PRIMARY KEY,
    u_id int NOT NULL,
    s_reg VARCHAR(80) NOT NULL,
    s_name VARCHAR(15),
    s_logo VARCHAR(80) DEFAULT 'NULL',
    s_status ENUM('1','0') DEFAULT '1',
    FOREIGN KEY (u_id) REFERENCES user(u_id)
    
);
CREATE table product(
	p_id int AUTO_INCREMENT PRIMARY KEY_LENGTH,
    c_id int,
    s_id int,
    p_name VARCHAR(15),
    p_image varchar(80),
    p_date datetime DEFAULT current_timestamp(),
    p_status  ENUM('1','0') DEFAULT '1',
    FOREIGN KEY (c_id) REFERENCES category(c_id),
    FOREIGN KEY (s_id) REFERENCES shop(s_id)    
);
CREATE table metric(
     m_id int AUTO_INCREMENT PRIMARY KEY,
     m_uid int,
     m_name VARCHAR(100), 
     m_date datetime DEFAULT current_timestamp(), 
     m_status ENUM('1','0') DEFAULT '1',
     FOREIGN KEY (m_uid) REFERENCES users(u_id) 
);


