INSERT INTO `users` (`UserId`, `Username`, `Password`, `Firstname`, `Lastname`, `Address`, `Telephone1`, `Telephone2`, `Gender`, `Email`, `Mode`, `Role`, `Image`, `Country`, `Religion`, `AddedId`, `DOB`, `Title`, `AddedDate`, `UpdatedDate`, `UpdatedId`, `UpdatedNotes`, `Status`, `Archived`, `ArchiveId`, `ArchiveDate`, `ArchiveTime`) VALUES
('2422331', 'stephen', '$2y$10$8mk518CjzawdUZ9qs3qIxu3u7iVKl/Y9PAPRxm8ZkwJRtZF6WElSi', 'Stephen', 'Iddrisu', NULL, '0241059800', '0241059800', 'Male', 'realcona@gmail.com', 'NEW-USER', 'Teacher', NULL, 'Ghanaian', 'Christian', '2429751', '2024-02-21', NULL, '2024-02-19 15:02:30', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2423461', 'francisca', '$2y$10$XcEajOhVTLp.9FYavVhMwelBNIHqk03KzZiKZwMdiBoEwyHeNOgf.', 'Francisca', 'Achiaa', NULL, '0241059800', '0241059800', 'Male', 'realcona@gmail.com', 'NEW-USER', 'Headteacher', 'uploads/users/377cb4aee78768ae7b08855802757fa5d274943f_3804.jpeg', 'Ghanaian', 'Christian', '2411152', '2024-02-28', NULL, '2024-02-19 06:53:20', '2024-02-19 10:00:18', '2429751', NULL, 'Active', 'NO', NULL, NULL, NULL),
('2423931', 'Kofi', '$2y$10$A0WvQH8BgV/hw9TdMkyai.Qmbsm0uYp.Z38wBNWMWhBFf83P6mmY2', 'Kofi', 'Nkansah', NULL, '0241059800', '0241059800', 'Male', 'realcona@gmail.com', 'NEW-USER', 'Teacher', NULL, 'Ghanaian', 'Christian', '2429751', '2024-02-21', NULL, '2024-02-19 20:36:25', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2426991', 'winifred', '$2y$10$Kw.X0JATnrMKT4lgpzU3PO6wGrDC1N98BqiWbsxo5hxOdYtITaOUi', 'Winnifred', 'Nkansah', NULL, '0241059800', '0241059800', 'Female', 'realcona@gmail.com', 'NEW-USER', 'Teacher', NULL, 'Ghanaian', 'Christian', '2429751', '2024-02-20', NULL, '2024-02-19 15:01:52', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2429751', 'nanayaw', '$2y$10$/w7PPB2egSPmGR5PIxlxpexy7xraOX/r4LwwRfbSbySWuVoHwajdi', 'Francis', 'Addai', NULL, '0241059800', '0241059800', 'Male', 'realcona@gmail.com', 'NEW-USER', 'Super Admin', 'uploads/users/8c5b84b43358bdfaadd1e8fd395345fb5630b065_3750.jpeg', 'Ghanaian', 'Christian', '2411152', '2024-02-29', NULL, '2024-02-19 06:53:55', '2024-02-19 07:54:58', '2411152', NULL, 'Active', 'NO', NULL, NULL, NULL);


INSERT INTO `class` (`ClassId`, `ClassName`, `NumberOfSubjects`, `ClassAbb`, `AddedId`, `UserId`, `AddedDate`, `UpdatedDate`, `UpdatedId`, `UpdatedNotes`, `Status`, `Archived`, `ArchiveId`, `ArchiveDate`, `ArchiveTime`) VALUES
('GRD25F224', 'K.G 1', '5', 'KG1', '2415631', '2415631', '2024-01-30 05:20:53', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRD268224', 'JHS 1', '10', 'JHS1', '2415631', '2415631', '2024-01-30 05:18:49', '2024-01-30 06:25:02', '2415631', NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRD5E3224', 'Primary 3', '9', 'PR3', '2415631', '2415631', '2024-01-30 05:17:43', '2024-01-30 06:23:24', '2415631', NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRD73E224', 'Nursery 2', '4', 'NUR2', '2415631', '2415631', '2024-01-30 05:20:19', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRD7C0224', 'Primary 2', '9', 'PR2', '2415631', '2415631', '2024-01-30 05:17:30', '2024-01-30 06:23:34', '2415631', NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRD7C2224', 'K.G 2', '5', 'KG2', '2415631', '2415631', '2024-01-30 05:20:33', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRD7EB224', 'Nursery 1', '4', 'NUR1', '2415631', '2415631', '2024-01-30 05:20:11', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRD852224', 'JHS 3', '10', 'JHS3', '2415631', '2415631', '2024-01-30 05:19:11', '2024-01-30 06:25:22', '2415631', NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRD8FE224', 'JHS 2', '10', 'JHS2', '2415631', '2415631', '2024-01-30 05:19:00', '2024-01-30 06:25:12', '2415631', NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRD9E9224', 'Primary 1', '9', 'PR1', '2415631', '2415631', '2024-01-30 05:17:15', '2024-01-30 06:23:44', '2415631', NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRDA7D224', 'Primary 5', '9', 'PR5', '2415631', '2415631', '2024-01-30 05:18:15', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRDE4C224', 'Primary 6', '9', 'PR6', '2415631', '2415631', '2024-01-30 05:18:29', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('GRDED7224', 'Primary 4', '9', 'PR4', '2415631', '2415631', '2024-01-30 05:17:58', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL);


INSERT INTO `section` (`SectionId`, `SectionName`, `AddedId`, `UserId`, `AddedDate`, `UpdatedDate`, `UpdatedId`, `UpdatedNotes`, `Status`, `Archived`, `ArchiveId`, `ArchiveDate`, `ArchiveTime`) VALUES
('SEC472524', 'Yellow', '2429751', '2429751', '2024-02-23 11:49:57', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('SEC718524', 'Green', '2429751', '2429751', '2024-02-23 19:16:58', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('SEC763524', 'Red', '2429751', '2429751', '2024-02-23 10:55:15', '2024-02-23 14:05:42', '2429751', NULL, 'Active', 'NO', NULL, NULL, NULL),
('SECF42524', 'Blue', '2429751', '2429751', '2024-02-23 19:17:07', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL);

INSERT INTO `portfolio` (`PortfolioId`, `PortfolioName`, `AddedId`, `UserId`, `AddedDate`, `UpdatedDate`, `UpdatedId`, `Status`) VALUES
('POR27A524', 'Section Leader (Red)', '2429751', '2429751', '2024-02-23 23:36:39', '0000-00-00 00:00:00', '', 'Active'),
('POR29A524', 'Girls\' Prefect (Main)', '2429751', '2429751', '2024-02-23 13:33:18', '2024-02-23 15:28:46', '', 'Active'),
('POR648524', 'Boys\' Prefect (Third Assistant)', '2429751', '2429751', '2024-02-23 13:56:10', '0000-00-00 00:00:00', '', 'Active'),
('POR72F524', 'Entertainment Prefect (Main)', '2429751', '2429751', '2024-02-23 19:17:57', '0000-00-00 00:00:00', '', 'Active'),
('POR8FB524', 'Compound Prefect (Main)', '2429751', '2429751', '2024-02-23 13:32:04', '2024-02-23 15:33:15', '2429751', 'Active'),
('PORB8E524', 'Boys\' Prefect (Second Assistant)', '2429751', '2429751', '2024-02-23 13:54:44', '0000-00-00 00:00:00', '', 'Active'),
('PORD33524', 'Boys\' Prefect (First Assistant)', '2429751', '2429751', '2024-02-23 13:41:54', '2024-02-23 15:31:37', '', 'Active'),
('PORD49524', 'Section Leader (Yellow)', '2429751', '2429751', '2024-02-23 23:37:18', '0000-00-00 00:00:00', '', 'Active'),
('PORF56524', 'Boys\' Prefect (Main)', '2429751', '2429751', '2024-02-23 13:34:12', '0000-00-00 00:00:00', '', 'Active'),
('PORFE9524', 'Girl\'s Prefect (First Assistant)', '2429751', '2429751', '2024-02-23 14:34:19', '0000-00-00 00:00:00', '', 'Active');

INSERT INTO `subjects` (`SubjectId`, `SubjectName`, `SubjectAbb`, `Periods`, `AddedId`, `UserId`, `AddedDate`, `UpdatedDate`, `UpdatedId`, `UpdatedNotes`, `Status`, `Archived`, `ArchiveId`, `ArchiveDate`, `ArchiveTime`) VALUES
('SUB031524', 'French', 'FRE', '3', '2411152', '2411152', '2024-02-09 19:24:42', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('SUB072524', 'Integrated Science', 'INT', '3', '2411152', '2411152', '2024-02-09 20:48:54', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('SUB269424', 'Computing', 'COM', '3', '2423894', '2423894', '2024-02-01 18:11:10', '2024-02-02 11:20:31', 'Unknown', NULL, 'Active', 'NO', NULL, NULL, NULL),
('SUB627524', 'Ghanaian Language', 'GHA', '3', '2411152', '2411152', '2024-02-09 19:56:55', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('SUB6E8524', 'Mathematics', 'MAT', '4', '2411152', '2411152', '2024-02-02 18:03:08', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('SUB87C424', 'English Language', 'ENG', '4', '2423894', '2423894', '2024-02-01 18:11:23', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('SUB8A0524', 'RME', 'RME', '3', '2411152', '2411152', '2024-02-09 19:21:34', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('SUBBCA524', 'Social Studies', 'SOC', '3', '2411152', '2411152', '2024-02-02 18:02:54', '2024-02-12 18:45:45', '2425615', NULL, 'Active', 'NO', NULL, NULL, NULL),
('SUBCD1124', 'Creative Arts & Design', 'CRE', '3', '2411152', '2411152', '2024-02-12 00:09:38', '2024-02-12 01:10:03', '2411152', NULL, 'Active', 'NO', NULL, NULL, NULL),
('SUBE3A524', 'Career Technology', 'CAR', '3', '2411152', '2411152', '2024-02-02 19:55:41', '2024-02-11 19:11:33', '2411152', NULL, 'Active', 'NO', NULL, NULL, NULL);

INSERT INTO `religion`(`ReligionId`,`Religion`,`AddedId`,`AddedDate`,`UpdatedId`,`UpdatedDate`,`UpdatedNotes`,`Status`,`Archived`,
`ArchiveId`,`ArchiveDate`,`ArchiveTime`) VALUES 
('R001','Christianity',NULL,NULL,NULL,NULL,NULL,'ACTIVE','NO',NULL,NULL,NULL),
('R002','Muslim',NULL,NULL,NULL,NULL,NULL,'ACTIVE','NO',NULL,NULL,NULL),
('R003','Traditionalist',NULL,NULL,NULL,NULL,NULL,'ACTIVE','NO',NULL,NULL,NULL);

INSERT INTO `nationality`(`NationalityId`,`Nationality`,`AddedId`,`AddedDate`,`UpdatedId`,`UpdatedDate`,`UpdatedNotes`,`Status`,`Archived`,
`ArchiveId`,`ArchiveDate`,`ArchiveTime`) VALUES 
('R001','Ghanaian',NULL,NULL,NULL,NULL,NULL,'ACTIVE','NO',NULL,NULL,NULL),
('R002','Togolese',NULL,NULL,NULL,NULL,NULL,'ACTIVE','NO',NULL,NULL,NULL),
('R003','Ivorian',NULL,NULL,NULL,NULL,NULL,'ACTIVE','NO',NULL,NULL,NULL),
('R004','Egyptian',NULL,NULL,NULL,NULL,NULL,'ACTIVE','NO',NULL,NULL,NULL);

INSERT INTO `region`(`RegionId`,`Region`) VALUES 
('1123','AHAFO'),
('123','ASHANTI'),
('111','BONO EAST'),
('222','BRONG AHAFO'),
('333','CENTRAL'),
('444','EASTERN'),
('555','GREATER ACCRA'),
('666','NORTH EAST'),
('677','NORTHERN'),
('888','OTI'),	
('999','SAVANNAH'),
('1010','UPPER EAST'),
('1212','UPPER WEST'),
('1313','WESTERN'),
('14141','WESTERN NORTH'),
('1515','VOLTA');

INSERT INTO `students` (`StudentId`, `Firstname`, `Lastname`, `Gender`, `ClassId`, `PreviousClass`, `NationalityId`, `Address`, `DOB`, `ReligionId`, `RegionId`, `DateJoined`, `CompleteYear`, `DenominationId`, `SectionId`, `PrevSchool`, `ParentName`, `ParentContact`, `ParentAddress`, `Image`, `PortfolioId`, `AddedId`, `UserId`, `AddedDate`, `UpdatedDate`, `UpdatedId`, `UpdatedNotes`, `Status`, `Archived`, `ArchiveId`, `ArchiveDate`, `ArchiveTime`) VALUES
('2412508', 'Gideon', 'Nkansah', 'Male', 'GRDE4C224', 'GRD7EB224', 'R002', 'Kumasi', '2024-01-02', 'R003', '1313', '2024-01-02', '2024-02-06', NULL, 'SEC472524', 'Kumasi Anglican Prep', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/e9449e0bc6fd26ea6cc576822b56a25b77bf8b42_3131.png', 'PORB8E524', '2415631', '2415631', '2024-01-30 05:31:11', '2024-02-23 15:40:08', '2429751', NULL, 'Active', 'NO', NULL, NULL, NULL),
('2412538', 'Francis', 'Nkansah', 'Male', 'GRD8FE224', 'GRD7EB224', 'R002', 'Adoato', '2024-01-10', 'R001', '123', '2024-02-28', '2024-02-13', NULL, 'SEC472524', 'Kumasi Anglican Prep', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/73410654b3ec09e8afaa8b3e77d7f0c53ff1a833_2533.png', 'PORD33524', '2415631', '2415631', '2024-01-30 05:34:04', '2024-02-23 20:06:38', '2429751', NULL, 'Active', 'NO', NULL, NULL, NULL),
('2412589', 'Gideon', 'Yaw', 'Male', 'GRD8FE224', '', 'R001', 'Kumasi', '2024-01-03', 'R001', '1515', '2024-01-24', '2024-01-15', NULL, NULL, 'Kumasi Anglican Prep', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/03ab8226ee9d03305e4cd0270adcc79f01968376_9401.jpg', '', '2415631', '2415631', '2024-01-30 05:29:57', '2024-02-13 08:56:00', '2425615', NULL, 'Active', 'NO', NULL, NULL, NULL),
('2412787', 'Stepanie', 'Addai', 'Female', 'GRD8FE224', 'GRD25F224', 'R001', 'Adoato', '1994-02-08', 'R001', '123', '2024-01-10', '2024-02-06', NULL, NULL, 'Kumasi Anglican Prep', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/c5668db9407fdb91f4b7cb7935369b1e1a9298f4_9969.jpg', '', '2415631', '2415631', '2024-01-30 05:05:18', '2024-01-30 06:27:32', '2415631', NULL, 'Active', 'NO', NULL, NULL, NULL),
('2412799', 'Mohammed', 'Nkansah', 'Male', 'GRD8FE224', 'GRD128524', 'R001', 'Kumasi', '2024-01-02', 'R001', '1123', '2024-01-09', '2024-01-03', NULL, NULL, 'Kumasi Anglican Prep', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/8830d69f7c617ed4417d068c5856b6888ce0a4b9_5261.jpg', '', '2415631', '2415631', '2024-01-30 05:03:47', '2024-02-13 08:56:17', '2425615', NULL, 'Active', 'NO', NULL, NULL, NULL),
('2412915', 'Mohammed', 'Addai', 'Female', 'GRD852224', 'GRDE4C224', 'R001', 'Kumasi', '2024-01-03', 'R001', '14141', '2024-02-08', '2024-02-01', NULL, NULL, 'Kumasi Anglican Prep', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/b019d5ef4e02250f3bfda42fb6d3ed41d619695c_4426.jpg', '', '2415631', '2415631', '2024-01-30 05:31:55', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2412931', 'Mohammed', 'Nkansah', 'Male', 'GRDE4C224', 'GRD7EB224', 'R002', 'Kumasi', '2024-01-03', 'R001', '999', '2024-01-26', '2024-02-07', NULL, 'SEC763524', 'Kumasi Anglican Prep', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/0b6463a447b0e4f6a6749c71c85639f8920d2222_3947.jpeg', '', '2415631', '2415631', '2024-01-30 05:36:18', '2024-02-23 12:21:20', '2429751', NULL, 'Active', 'NO', NULL, NULL, NULL),
('2412949', 'Gideon', 'Boahene', 'Female', 'GRDE4C224', 'GRD73E224', 'R002', 'Kumasi', '2024-01-03', 'R001', '1313', '2024-01-24', '2024-01-24', NULL, NULL, 'Kumasi Anglican Prep', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/1784cf1873f9426c7317e94daa6fda2452255900_3685.jpg', '', '2415631', '2415631', '2024-01-30 05:34:40', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2424483', 'Nana', 'Yaw', 'Male', 'GRD5E3224', 'GRD7EB224', 'R004', 'Kumasi', '2024-02-07', 'R001', '1010', '2024-02-22', '2024-02-16', NULL, NULL, 'Kumasi Anglican Prepatory School', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/bde45e2b4e7de97b543a29af0c911d0df068d861_1289.jpeg', '', '2411152', '2411152', '2024-02-08 10:16:45', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425001', 'Winnifred', 'Nkansah', 'Female', 'GRDE4C224', 'GRD7EB224', 'GHANAIAN', 'Kumasi', '2024-02-29', 'R001', '677', '2024-02-21', '2024-02-21', NULL, 'SEC763524', 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/080070095e2d41c8698badffa81188c17875a441_4000.png', 'POR29A524', '2411152', '2411152', '2024-02-02 15:15:33', '2024-02-23 20:13:56', '2429751', NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425099', 'Mohammed', 'Nkansah', 'Male', 'GRDED7224', 'GRD128524', 'R001', 'Kumasi', '2024-02-06', 'R001', '1212', '2024-02-27', '2024-02-21', NULL, NULL, 'Kumasi Anglican Prepatory School', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/fd4ec2566772628b301440671d86b962d42b0a37_2151.jpeg', '', '2411152', '2411152', '2024-02-09 19:50:34', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425106', 'Kofi', 'Achiaa', 'Male', 'GRDE4C224', 'GRDD7F324', 'R004', 'Kumasi', '2024-02-29', 'R001', '1123', '2024-02-21', '2024-02-28', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/e656b31304eda94caf9bb32fcb30c5072ae32f94_2607.jpg', '', '2411152', '2411152', '2024-02-09 13:21:42', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425232', 'Winnifred', 'Nkansah', 'Female', 'GRD7C0224', 'GRD044524', 'R004', 'Kumasi', '2024-02-28', 'R001', '1123', '2024-02-29', '2024-02-27', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/d52c06613cd4d0c39c7ebeccf63fa90acf28131a_5873.jpg', '', '2411152', '2411152', '2024-02-09 16:26:34', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425243', 'Francis', 'Nkansah', 'Male', 'GRDED7224', 'GRD9E9224', 'R004', 'Kumasi', '2024-01-31', 'R001', '14141', '2024-02-28', '2024-02-20', NULL, NULL, 'Kumasi Anglican Prepatory School', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/7eac559910137e22b165f4f7b427b96d7f494417_8175.png', '', '2429751', '2429751', '2024-02-23 06:20:46', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425288', 'Stephanie', 'Achiaa', 'Female', 'GRDE4C224', 'GRD25F224', 'R001', 'Kumasi', '2024-02-29', 'R001', '123', '2024-02-23', '2024-02-20', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/278c71029219c531882e59ac72eebd461eb361ea_6987.jpg', '', '2411152', '2411152', '2024-02-09 13:12:55', '2024-02-13 09:19:08', '2411152', NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425377', 'Nana', 'Yaw', 'Female', 'GRDA7D224', 'GRD73E224', 'R004', 'Kumasi', '2024-01-31', 'R001', '1313', '2024-02-28', '2024-02-22', NULL, NULL, 'Kumasi Anglican Prepatory School', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/81d2191ec0d226c7bcf496fcdaa00d10bd1a77e0_1678.png', '', '2429751', '2429751', '2024-02-23 06:09:54', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425381', 'Francisca', 'Boahen', 'Female', 'GRDA7D224', 'GRD7C0224', 'R004', 'Kumasi', '2024-02-23', 'R002', '1123', '2024-02-22', '2024-02-29', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/0ff42d8c62fce5589a3b49f602e9baf0251b2b62_9171.jpg', '', '2411152', '2411152', '2024-02-09 13:27:36', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425406', 'Stephen', 'Achiaa', 'Female', 'GRDED7224', 'GRDED7224', 'R001', 'Kumasi', '2024-02-29', 'R001', '1123', '2024-02-29', '2024-02-22', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/863bfcd7f097fe0e0735d64498a5b813d6763577_9833.jpg', '', '2411152', '2411152', '2024-02-09 13:19:29', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425475', 'Mohammed', 'Nkansah', 'Female', 'GRDA7D224', 'GRD7EB224', 'R001', 'Kumasi', '2024-02-07', 'R001', '123', '2024-01-31', '2024-02-08', NULL, 'SEC472524', 'Kumasi Anglican Prepatory School', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/96cd33c86ffdfd068601bc8346b72f8a1a42803c_1214.png', '', '2429751', '2429751', '2024-02-23 16:31:15', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425492', 'Kofi', 'Alhassan', 'Male', 'GRDA7D224', 'GRD9E9224', 'R004', 'Kumasi', '2024-02-23', 'R001', '1123', '2024-02-28', '2024-02-13', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/00564ca25cdbe52265786ffc5c082ad8a7455b78_2138.jpg', '', '2411152', '2411152', '2024-02-09 12:59:19', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425499', 'Mohammed', 'Addai', 'Female', 'GRD7C0224', 'GRD73E224', 'R001', 'Kumasi', '2024-01-30', 'R001', '1010', '2024-02-27', '2024-02-21', NULL, NULL, 'Kumasi Anglican Prepatory School', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/a8a55d4e22d82ee845ec66b82dc6bd446d5bbe6c_1397.png', '', '2429751', '2429751', '2024-02-23 05:57:09', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425514', 'Benedicta', 'Nkansah', 'Female', 'GRDE4C224', 'GRD128524', 'R001', 'Kumasi', '2024-02-28', 'R001', '1123', '2024-02-28', '2024-02-22', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/13b6b8cc9b7fdd8f8c0ab3397f9d02eb9d505d9e_3562.jpg', '', '2411152', '2411152', '2024-02-09 13:02:55', '2024-02-13 09:05:35', '2425615', NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425543', 'Winnifred', 'Achiaa', 'Female', 'GRD852224', 'GRDA7D224', NULL, 'Kumasi', '2024-02-29', 'R001', '1123', '2024-03-02', '2024-03-07', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/f7ce20b0bad9e99654a395fc638df5fb1fac2199_2234.jpg', '', '2411152', '2411152', '2024-02-09 13:24:48', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425597', 'Mohammed', 'Yaw', 'Male', 'GRDE4C224', 'GRD5E3224', 'R004', 'Kumasi', '2024-01-31', 'R001', '14141', '2024-03-06', '2024-03-08', NULL, NULL, 'Kumasi Anglican Prepatory School', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/cfe9b1789fa5167b07d7c4f6b4edbfe860dd5a55_2888.png', '', '2429751', '2429751', '2024-02-23 06:11:29', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425598', 'Francisca', 'Addai', 'Female', 'GRD8FE224', 'GRDED7224', 'R001', 'Kumasi', '2024-02-28', 'R001', '1123', '2024-02-22', '2024-02-21', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/fad93c4ddf71ba46012cf59488437eb4490feb5e_3321.jpg', '', '2411152', '2411152', '2024-02-09 12:56:54', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425649', 'Francis', 'Emma', 'Male', 'GRDED7224', 'GRD7C0224', 'R004', 'Kumasi', '2024-02-29', 'R001', '1123', '2024-02-21', '2024-02-27', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/ba85f7ef236b60ecef98a388924755963402d44c_4438.jpg', '', '2411152', '2411152', '2024-02-09 12:54:21', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425665', 'Francis', 'Nkansah', 'Female', 'GRD9E9224', 'GRD73E224', 'R004', 'Kumasi', '2024-01-31', 'R002', '677', '2024-02-21', '2024-02-20', NULL, NULL, 'Kumasi Anglican Prepatory School', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/71e2bd04cd91ffdd56a557e168abd830feea712d_8527.png', '', '2429751', '2429751', '2024-02-23 06:08:06', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425670', 'Francis', 'Nkansah', 'Male', 'GRDED7224', 'GRD9E9224', 'R004', 'Kumasi', '2024-01-31', 'R001', '14141', '2024-02-28', '2024-02-20', NULL, NULL, 'Kumasi Anglican Prepatory School', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/8101d82f314cddc898c4fd7d0ce5a545f6d8d894_6605.png', '', '2429751', '2429751', '2024-02-23 06:24:47', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425770', 'Hajia', 'Iddrisu', 'Female', 'GRDE4C224', 'GRD9E9224', 'R001', 'Kumasi', '2024-02-23', 'R002', '1123', '2024-02-21', '2024-02-20', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/bec7a0a0e33acd7c5e581e52c28299df5df20ab7_4414.jpg', '', '2411152', '2411152', '2024-02-09 13:00:53', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425867', 'Stephen', 'Achiaa', 'Female', 'GRD7C0224', 'GRD73E224', 'R004', 'Kumasi', '2024-02-28', 'R001', '333', '2024-02-28', '2024-02-14', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/55fd3c7b34e2090555cae9ff1650319f3b597e30_4840.jpg', '', '2411152', '2411152', '2024-02-09 12:48:06', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2425977', 'Francisca', 'Boahen', 'Female', 'GRD044524', 'GRDD7F324', 'R001', 'Kumasi', '2024-02-08', 'R001', '123', '2024-02-14', '2024-02-07', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/b6f9150803d873418b2536ef4aff385f1565f9b9_5113.jpg', '', '2411152', '2411152', '2024-02-09 19:12:53', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2426079', 'Mohammed', 'Boahene', 'Female', 'GRD044524', 'GRD128524', 'R003', 'Kumasi', '2024-02-08', 'R001', '555', '2024-02-22', '2024-02-19', NULL, NULL, 'Kumasi Anglican Prepatory School', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/ad06b94fbb24d4497c9bcc17ec6a655f3689e8d2_7788.png', '', '2411152', '2411152', '2024-02-10 06:07:49', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2426403', 'Stephen', 'Addai', 'Male', 'GRD7C0224', 'GRD9E9224', 'R001', 'Kumasi', '2024-03-01', 'R001', '1123', '2024-02-28', '2024-02-27', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/92bdb03aed4ceb5010e2bd06d040b088f55a00de_4837.jpg', '', '2411152', '2411152', '2024-02-10 06:54:12', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2426684', 'Nana', 'Nkansah', 'Male', 'GRD268224', 'GRD7EB224', 'R001', 'Kumasi', '2024-01-31', 'R001', '1123', '2024-02-22', '2024-02-22', NULL, NULL, 'Kumasi Anglican Prepatory School', 'Akosua Manu', '0241059800', 'Kumasi', 'uploads/student/c01aa6ecb1a1bebdb674693e0ce7c695cd735569_2013.png', '', '2411152', '2411152', '2024-02-17 07:20:44', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2426761', 'Stephen', 'Iddrisu', 'Male', 'GRD7C0224', 'GRD9E9224', 'R004', 'Kumasi', '2024-03-06', 'R001', '1123', '2024-02-27', '2024-02-28', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/6257714e3fc76214e8bb32e71781d0477af4a769_7827.jpeg', '', '2411152', '2411152', '2024-02-17 08:20:41', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2426829', 'Winnifred', 'Achiaa', 'Female', 'GRD9E9224', 'GRD128524', 'R001', 'Kumasi', '2024-02-22', 'R001', '1123', '2024-02-29', '2024-02-21', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/ea4f7062fe518c0c3d527bed95b122b35a12fe22_3671.jpg', '', '2411152', '2411152', '2024-02-10 07:40:34', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2426833', 'Francis', 'Iddrisu', 'Male', 'GRDA7D224', 'GRD7EB224', 'R001', 'Kumasi', '2024-02-23', 'R001', '1123', '2024-03-01', '2024-02-22', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/7f388cae18669ee48faae8c143e78c0b3931dfc4_1995.jpeg', '', '2411152', '2411152', '2024-02-17 08:19:33', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('2426920', 'Winnifred', 'Nkansah', 'Female', 'GRD7C0224', 'GRDD7F324', 'R001', 'Kumasi', '2024-02-28', 'R001', '1123', '2024-02-29', '2024-02-22', NULL, NULL, 'Anglican Preparatory School', 'Ama', '0241059800', 'Kumasi', 'uploads/student/26af0f467a531e1d6f65537d20dca4d019037d5c_5096.jpg', '', '2411152', '2411152', '2024-02-10 07:26:32', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL);


INSERT INTO `teacher_subjects` (`TeacherSubjectId`, `TeacherId`, `SubjectId`, `ClassSubjectId`, `ClassId`, `AddedId`, `UserId`, `AddedDate`, `UpdatedDate`, `UpdatedId`, `UpdatedNotes`, `Status`, `Archived`, `ArchiveId`, `ArchiveDate`, `ArchiveTime`) VALUES
('ASB0B1224', '2425621', 'SUB6E8524', 'CLS8D8424', 'GRD8FE224', '2411152', '2411152', '2024-02-12 20:37:48', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('ASB0DB224', '2421621', 'SUB87C424', 'CLS916224', 'GRDE4C224', '2425615', '2425615', '2024-02-13 08:17:03', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('ASB1CC224', '2425621', 'SUB87C424', 'CLS68E424', 'GRD8FE224', '2411152', '2411152', '2024-02-12 20:38:25', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('ASB5B2224', '2421621', 'SUB269424', 'CLS233224', 'GRDE4C224', '2425615', '2425615', '2024-02-13 08:16:48', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('ASB9E0224', '2425621', 'SUBBCA524', 'CLSB87424', 'GRD268224', '2425615', '2425615', '2024-02-13 07:59:41', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL),
('ASBA24224', '2425621', 'SUB269424', 'CLS28B424', 'GRD8FE224', '2411152', '2411152', '2024-02-12 20:38:42', NULL, NULL, NULL, 'Active', 'NO', NULL, NULL, NULL);

INSERT INTO `aca_setting` (`AcademicId`, `AcademicYear`, `Term`, `VacationDate`, `ReopenDate`, `NumberofDays`) VALUES
(231102, 2022, 'First Term', '2023-07-11', '2023-07-11', 45);


INSERT INTO `weeks` (`WeekId`,`weeks`) VALUES
('1001','WEEK 1'),
('1002','WEEK 2'),
('1003','WEEK 3'),
('1004','WEEK 4'),
('1005','WEEK 5'),
('1006','WEEK 6'),
('1007','WEEK 7'),
('1008','WEEK 8'),
('1009','WEEK 9'),
('1010','WEEK 10'),
('1011','WEEK 11'),
('1012','WEEK 12'),
('1013','WEEK 13');


INSERT INTO `class_subject` (`ClassSubjectId`, `ClassSubjectCode`, `SubjectId`, `ClassId`, `AddedId`, `SystemId`, `AddedDate`, `UpdatedDate`, `UpdatedId`, `UpdatedNotes`, `Status`, `UserId`, `Archived`, `ArchiveId`, `ArchiveDate`, `ArchiveTime`) VALUES
('CLS233224', 'Primary6COM922', 'Computing', 'Primary 6', '2425615', NULL, '2024-02-13 08:15:09', NULL, NULL, NULL, 'Active', '2425615', 'NO', NULL, NULL, NULL),
('CLS28B424', 'JHS2COM646', 'Computing', 'JHS 2', '2411152', NULL, '2024-02-01 18:12:55', NULL, NULL, NULL, 'Active', '2411152', 'NO', NULL, NULL, NULL),
('CLS3B4224', 'Primary4GHA607', 'Ghanaian Language', 'Primary 4', '2429751', NULL, '2024-02-20 08:46:20', NULL, NULL, NULL, 'Active', '2429751', 'NO', NULL, NULL, NULL),
('CLS55B624', 'JHS2CAR780', 'Career Technology', 'JHS 2', '2411152', NULL, '2024-02-10 06:13:28', '2024-02-10 07:21:45', '2411152', NULL, 'Active', '2411152', 'NO', NULL, NULL, NULL),
('CLS63E224', 'Primary4INT461', 'Integrated Science', 'Primary 4', '2429751', NULL, '2024-02-20 08:47:23', NULL, NULL, NULL, 'Active', '2429751', 'NO', NULL, NULL, NULL),
('CLS68E424', 'JHS2ENG621', 'English Language', 'JHS 2', '2411152', NULL, '2024-02-01 18:13:08', NULL, NULL, NULL, 'Active', '2411152', 'NO', NULL, NULL, NULL),
('CLS7D3424', 'JHS2SOC364', 'Social Studies', 'JHS 2', '2411152', NULL, '2024-02-01 18:13:17', NULL, NULL, NULL, 'Active', '2411152', 'NO', NULL, NULL, NULL),
('CLS8D8424', 'JHS2MAT221', 'Mathematics', 'JHS 2', '2411152', NULL, '2024-02-01 18:12:42', '2024-02-10 07:41:13', '2411152', NULL, 'Active', '2411152', 'NO', NULL, NULL, NULL),
('CLS916224', 'Primary6ENG743', 'English Language', 'Primary 6', '2425615', NULL, '2024-02-13 08:15:24', NULL, NULL, NULL, 'Active', '2425615', 'NO', NULL, NULL, NULL),
('CLS996224', 'Primary6RME488', 'RME', 'Primary 6', '2425615', NULL, '2024-02-13 08:15:38', NULL, NULL, NULL, 'Active', '2425615', 'NO', NULL, NULL, NULL),
('CLSA36224', 'Primary4MAT135', 'Mathematics', 'Primary 4', '2429751', NULL, '2024-02-20 08:46:56', NULL, NULL, NULL, 'Active', '2429751', 'NO', NULL, NULL, NULL),
('CLSB87424', 'JHS1SOC623', 'Social Studies', 'JHS 1', '2411152', NULL, '2024-02-01 18:12:46', '2024-02-12 14:19:08', '2411152', NULL, 'Active', '2411152', 'NO', NULL, NULL, NULL),
('CLSBBC224', 'Primary4RME860', 'RME', 'Primary 4', '2429751', NULL, '2024-02-20 08:47:44', NULL, NULL, NULL, 'Active', '2429751', 'NO', NULL, NULL, NULL),
('CLSC04424', 'JHS1ENG712', 'English Language', 'JHS 1', '2411152', NULL, '2024-02-01 18:12:12', '2024-02-11 19:07:55', '2411152', NULL, 'Active', '2411152', 'NO', NULL, NULL, NULL),
('CLSE25224', 'Primary6MAT638', 'Mathematics', 'Primary 6', '2425615', NULL, '2024-02-13 08:15:57', NULL, NULL, NULL, 'Active', '2425615', 'NO', NULL, NULL, NULL),
('CLSE6F224', 'Primary4ENG203', 'English Language', 'Primary 4', '2429751', NULL, '2024-02-20 08:46:34', NULL, NULL, NULL, 'Active', '2429751', 'NO', NULL, NULL, NULL),
('CLSFC5524', 'JHS1CAR681', 'Career Technology', 'JHS 1', '2411152', NULL, '2024-02-02 19:55:54', NULL, NULL, NULL, 'Active', '2411152', 'NO', NULL, NULL, NULL);