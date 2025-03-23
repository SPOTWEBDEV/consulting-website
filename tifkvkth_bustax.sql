-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2025 at 05:38 AM
-- Server version: 10.11.11-MariaDB-log
-- PHP Version: 8.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tifkvkth_bustax`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`, `status`) VALUES
(1, 'admin123@amdmin.com', 'admin123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` enum('pending','approved','declined','abandoned','success','failed','reversed','ongoing','cancelled') NOT NULL DEFAULT 'pending',
  `reference` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `type`, `date`, `amount`, `status`, `reference`) VALUES
(22, '', '', '', '', '2025-03-19 14:18:44', '', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `membership_type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `membership_type`, `name`, `date`, `occupation`, `address`, `phone`, `city`, `state`, `country`, `email`, `date_of_birth`, `gender`) VALUES
(1, 'Student', 'repented godswill', '2024-12-07', 'ughxs', 'obeagu', '+55 11 91234-5678', 'coal city', 'enugu state', 'Nigeria', 'spotwebdev.com@gmail.com', '2024-12-12', 'male'),
(2, 'Professional', 'festus', '2024-12-18', 'rev father', 'ameachi', '07080879957', 'coalcity', 'ENUGU state', 'nigeria', 'arumkingsley49@gmail.com', '2024-12-26', 'male'),
(3, '', '', '', '', '', '', '', '', '', '', '', 'male'),
(4, '', '', '', '', '', '', '', '', '', '', '', 'male'),
(5, '', '', '', '', '', '', '', '', '', '', '', 'male'),
(6, '', '', '', '', '', '', '', '', '', '', '', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'Bookkeeping', '<h4><strong>bookkeeping training and services</strong></h4><p><strong>Most companies are interested in recruiting bookkeepers to maintain their financial transactions and records. Bookkeepers need to be trained to acquire the skills to perform such import</strong></p>', '2025-01-18 15:32:05'),
(2, 'Financial Accounting Services', '<h3>Overview</h3><p>We provide more in-depth financial accounting services for profit entities, not-for-profit organizations, partnerships, individuals, etc. The Business and Tax Consulting Group, Inc., can assist in organizing your financial transactions and tasks at a higher level other than bookkeeping.</p><h3>Responsibilities</h3><ul><li>Create a chart of accounts.</li><li>Balance and maintain accurate ledgers/bank accounts.</li><li>Track customer and vendor invoices for timeliness and accuracy.</li><li>Coordinate appropriate billing to clients.</li><li>Creating and processing accounts receivable and payable.</li><li>&nbsp;Keeping records of purchases of assets and rentals, etc.</li><li>Recording and monitoring day-to-day financial transactions.</li><li>Reconciling sales tax collections and remittances.</li><li>Paying and tracking vendor invoices and account balances.</li><li>Working with accounting personnel when necessary.</li><li>Processing and handling employee time sheets and payrolls.</li><li>Providing guidance with financial reports as needed.</li><li>Advising leadership on compliance needs.</li><li>Monitoring and recording office expenses.</li><li>Reviewing and recording cash receipts and payments.</li><li>Developing monthly financial statements, including cash flow, profit and loss statements, and balance sheets.</li></ul><h3>&nbsp; Detailed Accounting Services</h3><ul><li>Maintaining General Ledgers: Updating and maintaining the general ledger, which is a comprehensive record of all financial transactions.</li><li>Reconciling Accounts: Ensuring that the records in the organization\'s accounts match the corresponding bank statements and correcting any discrepancies. Prepare monthly reconciliations, data entries, and financial statements.</li><li>Managing Accounts Payable and Receivable: Tracking and managing money owed by the company (accounts payable) and money owed to the company (accounts receivable).</li><li>Ensuring Compliance: Making sure that financial records comply with relevant laws and regulations.</li><li>Assisting with Audits: Providing information and documentation required for internal and external audits.</li><li>Budgeting and Forecasting: Helping with the preparation of budgets and financial forecasts.</li><li>Expense Tracking: Monitoring and recording expenses, ensuring they are correctly categorized and accounted for.</li><li>Recording Financial Transactions: Keeping accurate records of all financial transactions, including sales, purchases, receipts, and payments. This involves using reliable accounting software, spreadsheets, or ledger books.</li></ul><h3>Charges</h3><p>Charges for the Accounting Services are negotiated on a volume basis.</p>', '2025-03-19 07:00:41'),
(3, 'Tax Services', '<h2>Overview</h2><p>In our tax services, we understand the liability and huge business payout that is involved with noncompliance in federal, state, and local tax administrations. The complexity in understanding changes in tax laws is profound. We help our clients with the following:\\n\\n- Federal Taxation (Individual and Business)\\n- Sales and Use Tax\\n- Tax Training and Audit Assistance</p><h3>Tax Planning</h3><ol><li>The essence of tax planning is to allocate and arrange your financial affairs in a manner that taxes are minimized.\",</li><li>&nbsp;As tax experts, our team is on your side to assist in minimizing the payment of tax burdens.</li><li>To minimize the tax charges, effective tax planning is highly encouraged and recommended.</li><li>Taxes are inevitable expenses imposed on incomes, which could be invested or channeled to solve other financial obligations or used to expand business ventures.</li><li>The Business and Tax Consulting Group, Inc. team is on your side, and we care. &nbsp;</li></ol><h3>Tax Preparation</h3><ol><li>Ensuring compliance with federal, state, and local tax regulatory agencies is essential. We can assist you with the preparation and review of tax returns.</li><li>Training and assisting clients in the tax preparation process.</li><li>Collecting relevant financial records, including paystubs and income statements.</li><li>&nbsp;Inputting data from financial records into tax return software or databases.</li><li>Using applicable federal, state, and local tax law to determine deductions and how much your company will pay or earn on the return.</li><li>&nbsp;Providing feedback on changes in tax laws.</li><li>Completing and filing tax documents with appropriate agencies, like the IRS and state and local government entities.</li><li>Representing you on tax issues with applicable agencies as required.</li></ol><h3>Charges</h3><p>Charges for the Tax Services are negotiated on a volume basis.</p>', '2025-02-23 06:16:22'),
(4, 'Business Consulting', '<h2>Overview</h2><p>Our business consulting expertise is tailored to the needs of small or medium-sized businesses. We help analyze your business and create solutions to enable organizations to achieve their operational goals and objectives.</p><h3>Business Engineering</h3><p>This is where our business engineering comes into play. We will assist in identifying opportunities for business growth, increasing profit, and enhancing organizational efficiency. Your problems become our problems, and our goal is to help solve them and create plans to capitalize on business opportunities.</p><h3>Services</h3><ol><li>Analyzing business goals and objectives.</li><li>Identifying areas for business growth and improvement.</li><li>&nbsp;Creating effective business strategies.</li><li>Streamlining operations and enhancing efficiency.</li><li>Assisting in overcoming startup challenges and lack of knowledge.</li><li>Helping with financial planning and management.</li></ol><h3>Financial Planning Questions</h3><ol><li>Does management have a system of financial analysis or planning within the structure of this firm?</li><li>Does it have a system available to monitor purchases, sales, accounts receivable/payable, vendor performance, pricing, payroll, etc.</li><li>Does management have the following financial planning tools in place? Budgeting, Forecasting procedures, Continuous P&amp;L report availability, Asset utilization planning.</li><li>Is management running the operations, or are the operations running management?</li><li>What does management know about the following financial planning categories? Forecasting, Financial pro-forma, Short-term/long-term budgeting, Profit and Loss Statements, Balance sheets, Cash flow analysis, Operating reports, Insurance analysis (competitive), Payables tracking philosophy, Receivables philosophy, Aging, Operating discipline, Policies on receivables.</li></ol><h3>Consulting Services</h3><ol><li>Reviewing intended capital allocation.</li><li>Developing business plans.</li><li>Monitoring financial data for errors and omissions.</li><li>Assessing leadership styles and refining them.</li></ol><h3>Leadership and Soft Skills</h3><ol><li>Defining and streamlining your mission.</li><li>Evaluating and refocusing your objectives.</li><li>Formulating strategies to achieve growth and profit potential.</li><li>Determining and evaluating organizational policies.</li><li>Strengthening financial outlook and obligations.</li><li>Assisting in job task analysis for employees</li></ol><h3>Charges</h3><p>Charges for the Business Consulting Services are negotiated on an hourly basis.</p>', '2025-02-23 06:23:08'),
(5, 'Entrepreneurship Start-up and Training', '<h3>Overview</h3><p>In our House of Knowledge program, we help create value in the training of individuals, employees, managers, and company executives to manage tasks effectively and to enhance employee retention and productivity.</p><h3>Training Focus</h3><ul><li>Providing entrepreneurship training to individuals and small business owners.</li><li>&nbsp;Helping increase profit and competitiveness in their areas of specialties.</li><li>&nbsp;Offering guidance for business start-ups, covering the essentials of starting and running a business.</li></ul><h3>Training Program Structure</h3><p>&nbsp; The program is designed for Five Levels (one day per week), focusing on the following competencies:</p><ul><li>Level 1: Business Start-ups (Cost $250).</li><li>Level 2: Entrepreneurship leadership and management process (Cost $250).</li><li>Level 3: Basic bookkeeping and financial statements (Cost $250).</li><li>Level 4: Financial statement analysis (decision-making tools) (Cost $250).</li><li>Level 5: Business plan (hands-on experience) (Cost $250).</li></ul><h3>Entrepreneurship Development</h3><ul><li>&nbsp;Answering key questions like business location, regulations, protecting assets, business planning, and ownership structure.</li><li>Guiding individuals through the decisions required when starting a business: business location, business type, legal structure, and more.</li></ul><h3>Charges</h3><ul><li>Candidates may elect to participate in either a full package (all five concepts) or in any individual training category.</li></ul><h3>Certification</h3><p>After completing the five levels of training, you will receive a certificate of completion, solidifying your mastery in how to start, manage, and make business decisions effectively.<br>&nbsp; &nbsp; &nbsp; &nbsp;</p>', '2025-03-18 21:12:29'),
(6, 'Certification Program', '<style>\r\n    .cer-work{\r\n        width:500px\r\n    }\r\n    .img-holder{\r\n        display:flex;\r\n        gap:20px;\r\n        flex-wrap:wrap\r\n    }\r\n    @media(max-width:700px){\r\n        .cer-work{\r\n        width:400px\r\n    }\r\n    }\r\n    @media(max-width:500px){\r\n        .cer-work{\r\n        width: 90%\r\n    }\r\n    }\r\n</style>\r\n<h3>About PIIB</h3><p>The Institute of Professional Independent Bookkeepers (PIIB) is a membership association for bookkeepers, designed to provide educational awareness to individuals or employees of business organizations who aspire to become professional bookkeepers. The PIIB equips individuals and groups with the knowledge needed to function as professional bookkeepers.</p><h3>PIIB Objectives</h3><p>The fundamental objective of PIIB is to provide training and enhance expertise, making members reliable, dependable, and accurate in preparing and reporting financial information. Members completing all four levels of training will be proficient in preparing and analyzing critical bookkeeping records like journal entries, ledger transactions, income statements, cash flow statements, and balance sheets.</p><h3>Learning Outline</h3><p>The certification program covers both foundational and advanced bookkeeping tasks. It consists of four levels of training, each building on the last. Subjects include:</p><h3>Levels</h3><ul><li>Level 1: Bookkeeping Orientation Level</li><li>Level 2: Analyzing and Recording Transactions</li><li>Level 3: Bookkeeping and Accounting Cycle Process</li><li>Level 4: Analysis of Financial Statement</li></ul><h3>Membership</h3><p>Before starting the training, candidates must register as a member of PIIB. Membership is essential for receiving professional skills and knowledge required in the bookkeeping career. There are two membership types: Student Member and Professional Member.</p><h3>Membership Types</h3><ul><li>Student Member: For beginners or students of any academic institution, with a non-refundable application fee of $30.99, and yearly dues of $39.99.</li><li>Professional Member: For individuals employed in the bookkeeping or accounting profession, with a non-refundable application fee of $49.99, and yearly dues of $59.99.</li></ul><h3>Ethical Considerations</h3><p>Members are expected to adhere to ethical standards in bookkeeping, including honesty, objectivity, confidentiality, and professionalism. These principles ensure trust in maintaining and securing client financial information.</p><h3>PIIB Services for Members</h3><ul><li>Level 1: Bookkeeping Orientation Level - $200</li><li>Level 2: Analyzing and Recording Transactions - $200</li><li>Level 3: Bookkeeping and Accounting Cycle Process - $200</li><li>Level 4: Analysis of Financial Statement - $200</li></ul><h3>Study Expectations</h3><p>All members must complete assignments and exams for each level within 2 weeks. Assistance is available for clarifying expectations. Upon completing the four levels and passing the exams, you will be awarded the Certified Independent Bookkeeper (CIB) designation.</p> <div class=\"img-holder\">\r\n<img class=\"cer-work\" src=\"https://bustaxbookkeeping.com/ceritificate/1.jpg\" alt=\"\"> <img src=\"https://bustaxbookkeeping.com/ceritificate/1.jpg\"  class=\"cer-work\" alt=\"\">\r\n</div>', '2025-03-18 21:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date_registered` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `date_registered`, `status`) VALUES
(1, 'SPOTWEB COM', 'giftchinenyenwa1@gmail.com', '07047548913', '2024-12-19 22:19:17', ''),
(2, 'SPOTWEB COM', 'spotwebdev.com@gmail.com', '07047548913', '2024-12-20 01:30:15', ''),
(3, 'thebest', 'firstclass@gmail.com', '07047548913', '2024-12-20 01:38:57', ''),
(4, 'firstclassThebest', 'chiamaka@gmail.com', '049499595', '2024-12-20 01:45:57', ''),
(5, 'SPOTWEB COM', 'nkem@gmail.com', '07047548913', '2024-12-21 22:41:09', ''),
(6, '', '', '', '2024-12-22 05:26:59', ''),
(7, 'Francis A Ikeokwu', 'francisikeokwu@gmail.com', '9042549343', '2024-12-23 00:23:37', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
