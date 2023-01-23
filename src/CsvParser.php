<?php


namespace App;


use App\Factories\BaseCarFactory;

final class CsvParser implements ParserInterface
{
    /** @param BaseCarFactory[] $carFactories */
    public function __construct(private array $carFactories) {}

    public function getCarList(string $fileName): array
    {
        $file = new \SplFileObject($fileName);
        $firstLine = $this->getFgetcsv($file);
        $list = [];
        while ($data = $this->getFgetcsv($file)) {
            if (count($data) < 7) {
                continue;
            }
            try {
                foreach ($this->carFactories as $carFactory) {
                    if ($carFactory->checkType($data[0])) {
                        $list[] = $carFactory->createCarFromArray($data);
                        break;
                    }
                }
            } catch (\Throwable $e) {
                continue;
            }
        }
        return $list;
    }

    protected function getFgetcsv(\SplFileObject $file): array|bool
    {
        return $file->fgetcsv(";");
    }
}
