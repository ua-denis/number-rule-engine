# NumberRuleEngine

**NumberRuleEngine** is a PHP application designed to process numbers based on flexible and scalable rules. The
application follows **Clean Architecture**, **Domain-Driven Design (DDD)**, and implements **Dependency
Injection (DI)**, adhering to best practices like **Clean Code** and **GRASP**.

## Requirements

- PHP 8.0 or later
- Composer

## Installation

1. Install the required dependencies:
   ```bash
   composer install
   ```

2. Generate the autoload file:
   ```bash
   composer dump-autoload
   ```

## Usage

1. To run the application, execute the following command in the root directory:
   ```bash
   php src/main.php
   ```

2. The application will generate an array of numbers from 1 to 100 and apply rules to them. The results will be printed
   in the terminal.

## Architecture Overview

**NumberRuleEngine** is built using **Clean Architecture** principles. The project is divided into several layers:

- **Core**: Contains the business logic (Specifications for rules).
- **Infrastructure**: Implements the service layer and dependency injection.
- **Interfaces**: Contains the CLI interface to interact with the system.

### Key Components

- **Specifications**: The core logic for applying rules to numbers.
- **Dependency Injection**: Used to manage dependencies between different layers.

## Design Patterns

The following design patterns are implemented in the project:

- **Specification Pattern**: Used to define business rules and conditions.
- **Decorator Pattern**: Adds functionality to existing specifications without modifying them directly.
- **Dependency Injection**: Used to inject services and handle dependencies.
- **Strategy Pattern**: Ensures that rule checks are dynamically configurable.
